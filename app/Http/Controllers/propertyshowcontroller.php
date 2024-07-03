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

        if ($response->successful()) {
            $data = $response->collect();
            $properties = $data['data'];
        } else {
            // Handle the error, you can log it or return a default value
            $properties = collect(); // Return an empty collection
        }

        return view('admin.allproperty', ['properties' => $properties]);
    }


    public function show(Request $request)
    {
        $propertyID = $request->query('propertyID');

        // Simulate an API call to get property details
        $response = Http::get("https://nplled.smggreen.com/api/PropertyRegistration/{$propertyID}");

        if ($response->successful()) {
            $propertydisplay = $response->json()['data']; // Access 'data' array from API response
            return view('admin.showpropertydetails', compact('propertydisplay'));
        } else {
            return view('admin.showpropertydetails')->withErrors(['msg' => 'Error fetching property details.']);
        }
    }
}
