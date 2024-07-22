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

        $email = $request->email;

        try {
            // Make API call to check if email exists
            $response = Http::post('https://nplled.smggreen.com/api/login', [
                'identifier' => $email
            ]);

            // Decode the response
            $responseData = $response->json();

            // Check if the API response indicates success
            if ($response->successful() && isset($responseData['success']) && $responseData['success']) {
                // Generate OTP
                $otp = rand(100000, 999999);

                // Log the generated OTP for debugging (remove this in production)
                Log::debug('Generated OTP: ' . $otp);

                // Store OTP and user data in session
                $request->session()->put('otp', $otp);
                $request->session()->put('user_data', $responseData['data']); // Store the user data from the API response

                // Send OTP via email
                try {
                    Mail::to($email)->send(new SendOtpMail($otp));
                } catch (\Exception $e) {
                    // Log the error message
                    Log::error('Failed to send OTP email: ' . $e->getMessage());

                    // Return an error response
                    return back()->withErrors(['email' => 'Failed to send OTP email. Please try again.']);
                }

                // Redirect to OTP verification with email in session
                return redirect()->route('verify.otp.login')->with('email', $email);
            } else {
                // Email not found, return with error message
                return back()->withErrors(['email' => 'Email not found. Please try again.']);
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return back()->withErrors(['email' => 'An error occurred while processing your request. Please try again.']);
        }
    }


    public function verifyOtp(Request $request)
    {
        // Retrieve OTP and user data from session
        $otp = $request->input('otp');
        $userOtp = $request->session()->get('otp');
        $userData = $request->session()->get('user_data');

        // Log the event without exposing sensitive data
        Log::debug('User entered OTP attempt.');

        // Validate the OTP format
        if (!is_numeric($otp) || strlen($otp) !== 6) {
            return back()->withErrors(['otp' => 'Invalid OTP format.']);
        }

        // Check if the OTP matches
        if ($otp === strval($userOtp)) {
            // Ensure user data is present in the session
            if (!$userData) {
                return back()->withErrors(['otp' => 'User data not found. Please try logging in again.']);
            }

            // Create a mock user instance using the API response data
            $user = new User();
            $user->id = $userData['id'];
            $user->email = $userData['email'];
            $user->name = $userData['userName'];
            $user->phone = $userData['phoneNumber'];
            $user->role = $userData['roleName'];

            // Manually set the authenticated user in the session
            Auth::login($user);

            // Clear OTP from session
            $request->session()->forget('otp');

            // Redirect to user profile with user data
            return redirect()->route('user.profile');
        } else {
            // OTP did not match
            return back()->withErrors(['otp' => 'Invalid OTP']);
        }
    }
    public function logout(Request $request)
    {
        // Clear the user's session
        $request->session()->flush();

        // Redirect to the login page or any other desired page
        return redirect()->route('login')->with('message', 'Logged out successfully');
    }
}
