<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Mail\VerifyEmail;

class RegisterController extends Controller
{
    public function fetchData()
    {
        try {
            $response = Http::get('https://nplled.smggreen.com/api/AspNetUser');

            if ($response->successful()) {
                $data = $response->json();
                Log::info('API Response:', ['data' => $data]); // Log the data for debugging purposes

                // Extract the nested data array
                $userData = $data['data'] ?? [];

                return view('admin.registeruser', compact('userData'));
            } else {
                Log::error('API call failed with status code ' . $response->status());
                return redirect()->back()->with('error', 'Error fetching data from API. Please try again later.');
            }
        } catch (\Exception $e) {
            Log::error('Error fetching data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error fetching data: ' . $e->getMessage());
        }
    }

    public function register(Request $request)
    {
        Log::info('Incoming request data:', ['request_data' => $request->all()]);

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phonenumber' => 'required|string|max:20',
            'role' => 'required|string|in:agent,owner,builder'
        ]);

        // Extract data from the request
        $data = [
            'userName' => $request->input('name'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phonenumber'),
            'roleName' => $request->input('role'),
        ];

        // Generate OTP
        $otp = rand(100000, 999999);

        // Store data and OTP in session
        Session::put('registration_data', $data);
        Session::put('otp', $otp);

        // Send OTP email
        Mail::to($request->input('email'))->send(new VerifyEmail($otp));

        // Log extracted data for debugging
        Log::info('Data to be sent to API:', ['data' => $data]);
        Log::info('OTP sent:', ['otp' => $otp]);

        // Redirect to OTP verification page
        return redirect()->route('verify.otp.form')->with('status', 'OTP has been sent to your email!');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate(['otp' => 'required|numeric']);

        $otp = Session::get('otp');

        if ($request->otp == $otp) {
            // OTP is correct, proceed with registration
            $registrationData = Session::get('registration_data');

            // Call the external API
            $response = Http::post('https://nplled.smggreen.com/api/AspNetUser', $registrationData);

            // Log API response for debugging
            Log::info('API Response:', ['response' => $response->json()]);

            if ($response->successful()) {
                // Clear session data
                Session::forget(['registration_data', 'otp']);

                // Handle successful registration
                return redirect()->route('register.form')->with('status', 'Registration successful!');
            } else {
                // Handle API error response
                return redirect()->route('register.form')->withErrors(['api_error' => 'Registration failed. Please try again.']);
            }
        } else {
            return back()->withErrors(['otp' => 'Invalid OTP']);
        }
    }


    
}
