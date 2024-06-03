<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log; // Add Log facade

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phonenumber' => 'required|string|max:20',
        ]);

        // Extract data from the request
        $data = [
            'userName' => $request->input('name'),
            'email' => $request->input('email'),
            'PhoneNumber' => $request->input('phonenumber'),
            'roleName' => 'agent',
        ];

        // Log extracted data for debugging
        Log::info('Data to be sent to API:', $data);

        // Call external API
        $response = Http::post('https://nplled.smggreen.com/api/AspNetUser', $data);

        // Log API response for debugging
        Log::info('API Response:', $response->json());

        if ($response->successful()) {
            // Handle successful registration
            return redirect()->route('register.form')->with('status', 'Registration successful!');
        } else {
            // Handle API error response
            return redirect()->route('register.form')->withErrors(['api_error' => 'Registration failed. Please try again.']);
        }
    }
}
