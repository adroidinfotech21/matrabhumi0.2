<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function profileShow(Request $request)
    {



        try {
            // Make API call to fetch user data
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' // Adjust based on your auth method
            ])->get('https://nplled.smggreen.com/api/login'); // Replace with your API endpoint

            $userData = $response->json();

            // Check if the API response indicates successful authentication (adjust logic as needed)
            if (!$userData || !$userData['is_authenticated']) {
                return redirect()->route('login')->withErrors(['message' => 'Please login to access your profile.']);
            }

            return view('user.profile', compact('userData'));
        } catch (\Exception $e) {
            // Handle API errors
            return redirect()->route('login')->withErrors(['message' => 'Error fetching user data.']);
        }
    }
}