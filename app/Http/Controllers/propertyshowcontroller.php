<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class propertyshowcontroller extends Controller
{
    public function fetchProperties()
    {
        // Make a GET request to the external API
        $response = Http::get('https://nplled.smggreen.com/api/PropertyRegistration');

        // Check if the request was successful
        if ($response->successful()) {
            // Get the data from the response
            $properties = $response->json();

            // Return the data to the frontend
            return response()->json($properties);
        } else {
            // Handle the error
            return response()->json(['error' => 'Failed to fetch properties'], 500);
        }
    }
}
