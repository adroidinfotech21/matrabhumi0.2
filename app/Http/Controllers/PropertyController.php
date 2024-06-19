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
    public function getPropertyDetails(Request $request)
    {
        $propertyType = $request->query('propertyType');
        $filter = $request->query('filter', 'Month'); // Default filter value, adjust as needed

        // Example: Fetch property details from your API based on $propertyType and $filter
        $response = Http::get('https://nplled.smggreen.com/api/DropDown', [
            'filter' => $filter,
        ]);

        if ($response->successful()) {
            $propertyDetails = $response->json()['data'];
            return response()->json(['success' => true, 'data' => $propertyDetails]);
        }

        return response()->json(['success' => false, 'message' => 'Failed to fetch property details'], 500);
    }
}
