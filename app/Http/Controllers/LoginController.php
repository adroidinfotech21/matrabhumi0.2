<?php

namespace App\Http\Controllers;

use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->input('email');

        try {
            // Make API call to check if email exists
            $response = Http::post('https://nplled.smggreen.com/api/login', [
                'identifier' => $email
            ]);

            $responseData = $response->json();

            if ($response->successful() && isset($responseData['success']) && $responseData['success']) {
                // Generate OTP
                $otp = rand(100000, 999999);

                // Log the generated OTP (for debugging, remove in production)
                Log::debug('Generated OTP: ' . $otp);

                // Store OTP and user data in session
                $request->session()->put('otp', $otp);
                $request->session()->put('verified_user_data', $responseData['data']);

                // Log the session data
                //Log::debug('Stored OTP in session: ' . $request->session()->get('otp'));
                //Log::debug('Stored user data in session: ' . print_r($request->session()->get('verified_user_data'), true));

                // Retrieve and log the session data to confirm it's stored
                $storedOtp = $request->session()->get('otp');
                $storedUserData = $request->session()->get('verified_user_data');

                Log::debug('Retrieved OTP from session: ' . $storedOtp);
                Log::debug('Retrieved user data from session: ' . print_r($storedUserData, true));

                // Send OTP via email
                try {
                    Mail::to($email)->send(new SendOtpMail($otp));
                    Log::debug('OTP email sent to: ' . $email);
                } catch (\Exception $e) {
                    Log::error('Failed to send OTP email: ' . $e->getMessage());
                    return back()->withErrors(['email' => 'Failed to send OTP email. Please try again.']);
                }

                // Redirect to OTP verification page
                return redirect()->route('verify.otp.login')->with('email', $email);
            } else {
                $errorMessage = isset($responseData['message']) ? $responseData['message'] : 'An error occurred while processing your request.';
                return back()->withErrors(['email' => $errorMessage]);
            }
        } catch (\Exception $e) {
            Log::error('Error in login process: ' . $e->getMessage());
            return back()->withErrors(['email' => 'An error occurred while processing your request. Please try again.']);
        }
    }

    public function verifyOtp(Request $request)
    {
        $otp = (int) $request->input('otp');
        $userOtp = $request->session()->get('otp');
        $verifiedUserData = $request->session()->get('verified_user_data');

        Log::debug('User entered OTP attempt.', ['entered_otp' => $otp]);
        Log::debug('OTP from session:', ['session_otp' => $userOtp]);
        Log::debug('Verified user data from session:', ['verified_user_data' => $verifiedUserData]);

        // Uncomment to inspect session data


        if (!is_numeric($otp) || strlen($otp) !== 6) {
            Log::warning('Invalid OTP format entered.');
            return back()->withErrors(['otp' => 'Invalid OTP format.']);
        }

        if ($otp === $userOtp) {
            Log::debug('OTP matched');
            $request->session()->put('user_data', $verifiedUserData);
            //dd($request->session()->all());
            return redirect()->route('loginuser')->with('success', 'OTP verified successfully!');
            // Rest of your code
        } else {
            Log::warning('OTP mismatch');
            return back()->withErrors(['otp' => 'Invalid OTP']);
        }
    }
    public function showProfile(Request $request)
    {
        $userData = $request->session()->get('user_data', []);

        return view('loginuser', compact('userData'));
    }

    public function logout(Request $request)
    {
        // Clear the user's session
        $request->session()->flush();

        // Redirect to the login page or any other desired page
        return redirect()->route('login')->with('message', 'Logged out successfully');
    }
}
