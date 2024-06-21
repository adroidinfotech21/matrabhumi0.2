<?php

// app/Http/Controllers/PropertyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PropertyController extends Controller
{
    public function propertyTypeForm()
    {
        try {
            // Fetch property types from the correct API endpoint
            $response = Http::get('https://nplled.smggreen.com/api/PropertySubType');

            if ($response->successful()) {
                $propertyTypes = $response->json()['data'];
                Log::info('Property Types API Response:', $propertyTypes); // Log the entire response data
            } else {
                // Handle error
                $propertyTypes = [];
                Log::error('Failed to fetch property types. Error: ' . $response->status());
            }

            // Pass the property types to the view
            return view('addproperty.addproperty', ['propertyTypes' => $propertyTypes]);

        } catch (\Exception $e) {
            // Handle any exceptions or errors
            Log::error('Exception while fetching property types: ' . $e->getMessage());
            return view('addproperty.addproperty', ['propertyTypes' => []])->withErrors(['error' => 'Failed to fetch property types.']);
        }
    }
    public function getPropertyPossessionStatus()
    {
        try {
            // Make HTTP GET request to API endpoint
            $response = Http::get('https://nplled.smggreen.com/api/DropDown', [
                'filter' => 'PossessionStatus',
            ]);

            // Check if the request was successful (status code 200-299)
            if ($response->successful()) {
                // Extract the 'data' array from the JSON response
                $propertyPossessionStatus = $response->json()['data'];
                dd($propertyPossessionStatus);
                // Optionally, you can return this data as a JSON response
                return response()->json([
                    'success' => true,
                    'data' => $propertyPossessionStatus
                ]);
            } else {
                // Handle the case where the API request was not successful
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to fetch Possession Status options'
                ], $response->status());
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the API request
            return response()->json([
                'success' => false,
                'message' => 'Exception occurred: ' . $e->getMessage()
            ], 500); // Internal Server Error status code
        }
    }

}
