<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdRegistrationController extends Controller
{
     public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'advertisement' => 'required',
            'propertyName' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'budget' => 'required|numeric',
            'typeOfHouse' => 'required|string',
            'numberOfRooms' => 'required|string',
            'possessionDate' => 'required|string',
            'yearOfProperty' => 'required|numeric|min:1800|max:2024',
            'amenities' => 'nullable|array',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Prepare the data to send to the API
        $data = $request->except('photos');
        $photos = $request->file('photos');

        // Handle photo uploads
        if ($photos) {
            foreach ($photos as $photo) {
                $photoPath = $photo->store('photos', 'public');
                $data['photos'][] = url('storage/' . $photoPath);
            }
        }

        // Send the data to the API
        $response = Http::post('https://nplled.smggreen.com/api/AdRegistration', $data);

        // Check for successful response
        if ($response->successful()) {
            return redirect()->back()->with('success', 'Advertisement registered successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to register advertisement. Please try again.');
        }
    }
}
