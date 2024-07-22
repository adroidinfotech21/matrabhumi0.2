<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    public function profileshow()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['message' => 'Please login to access your profile.']);
        }

        try {
            // Initialize Guzzle client
            $client = new Client();

            // Make a request to the external API to fetch user data
            $response = $client->get('https://api.example.com/user/' . $user->id, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $user->api_token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode the JSON response to an array
            $apiUser = json_decode($response->getBody(), true);

            // Pass the API user data to the view
            return view('user.profile', compact('apiUser'));
        } catch (\Exception $e) {
            // Handle errors (e.g., API not reachable, invalid response, etc.)
            return redirect()->route('login')->withErrors(['message' => 'Unable to retrieve profile information. Please try again later.']);
        }
    }
}
