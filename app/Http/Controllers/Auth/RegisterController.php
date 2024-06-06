<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log; // Add Log facade

class RegisterController extends Controller
{


    public function fetchData()
{
    try {
        $response = Http::get('https://nplled.smggreen.com/api/AspNetUser');

        if ($response->successful()) {
            $data = $response->json();
            \Log::info('API Response:', $data); // Log the data for debugging purposes

            // Extract the nested data array
            $userData = $data['data'] ?? [];

            return view('admin.registeruser', compact('userData'));
        } else {
            \Log::error('API call failed with status code ' . $response->status());
            return redirect()->back()->with('error', 'Error fetching data from API. Please try again later.');
        }
    } catch (\Exception $e) {
        \Log::error('Error fetching data: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Error fetching data: ' . $e->getMessage());
    }
}





public function register(Request $request)
{
    Log::info('Incoming request data:', $request->all());

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