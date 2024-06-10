<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Mail\VerifyLogEmail;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showOtpForm()
    {
        return view('verify-otp');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email'
    ]);

    try {
        $email = $request->email;

        // Log the request data
        Log::info('Sending login request to API', ['email' => $email]);

        // Send request to API to check if the email exists and send OTP
        $response = Http::post('https://nplled.smggreen.com/api/login/', [
            'email' => $email
        ]);

        $responseData = $response->json();
        Log::info('API Response for login:', ['response' => $responseData]);

        // Check the structure of the response
        if ($response->successful()) {
            if (isset($responseData['success']) && $responseData['success']) {
                // Generate OTP
                $otp = rand(100000, 999999);

                // Store email and OTP in session
                Session::put('email', $email);
                Session::put('otp', $otp);

                // Send OTP email
                Mail::to($email)->send(new VerifyLogEmail($otp));

                // Redirect to OTP verification page
                return redirect()->route('verify.otp.form')->with('status', 'OTP has been sent to your email!');
            } else {
                // Handle case where 'success' is not true
                $errorMessage = $responseData['message'] ?? 'Unknown error';
                Log::error('API Response indicates failure:', ['response' => $responseData]);
                return back()->withErrors(['email' => 'Email not found. Please try again. ' . $errorMessage])->withInput();
            }
        } else {
            // Handle HTTP response errors
            Log::error('HTTP error during API call:', ['status' => $response->status(), 'response' => $responseData]);
            return back()->withErrors(['email' => 'API call failed with status code ' . $response->status()])->withInput();
        }
    } catch (\Exception $e) {
        Log::error('API request error:', ['error' => $e->getMessage()]);
        return back()->withErrors(['api_error' => 'An error occurred while checking the email. Please try again.'])->withInput();
    }
}


    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric'
        ]);

        $email = Session::get('email');
        $otp = Session::get('otp');

        if ($request->otp == $otp) {
            // OTP is correct, proceed with login
            Session::forget('otp'); // Clear the OTP from session

            // Redirect to dashboard or desired page after login
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        } else {
            return back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
        }
    }
}
