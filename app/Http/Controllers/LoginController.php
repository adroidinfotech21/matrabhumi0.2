<?php

namespace App\Http\Controllers;

use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

                // Store OTP in session
                $request->session()->put('otp', $otp);

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
        // Get the OTP entered by the user from the request
        $otp = $request->input('otp');

        // Get the user's OTP from the session
        $userOtp = $request->session()->get('otp');

        // Log the OTPs for debugging
        Log::debug('User entered OTP: ' . $otp);
        Log::debug('Session OTP: ' . $userOtp);

        // Check if the OTP entered by the user matches the stored OTP
        if ($otp === strval($userOtp)) { // Convert to string to avoid strict comparison issues
            // OTP is verified, perform necessary actions (e.g., log the user in, update user data, etc.)
            // Redirect to index page after successful verification
            return redirect()->route('user.profile')->with('message', 'OTP verification successful');
        } else {
            // OTP verification failed, return an error response
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
