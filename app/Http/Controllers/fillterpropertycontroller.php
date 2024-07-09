<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class fillterpropertycontroller extends Controller
{
    public function fetchAndFilterProperties(Request $request)
    {
        $city = $request->query('city');
        $propertyTypeID = $request->query('propertyTypeID');

        // Fetch data from the API
        $client = new Client();
        $response = $client->get('https://nplled.smggreen.com/api/PropertyRegistration'); // Replace 'API_ENDPOINT' with your actual API endpoint
        $responseData = json_decode($response->getBody(), true);

        if ($responseData['success'] && isset($responseData['data'])) {
            $data = $responseData['data'];

            // Filter data based on city and property type
            $filteredData = array_filter($data, function ($property) use ($city, $propertyTypeID) {
                return ($city === 'any' || $property['city'] === $city) &&
                    ($propertyTypeID === 'any' || $property['propertyTypeID'] == $propertyTypeID);
            });

            return view('properties', ['properties' => $filteredData]);
        } else {
            // Handle the case where the API response is not successful
            return view('properties', ['properties' => []]);
        }
    }


    public function showui(Request $request)
    {
        $propertyID = $request->query('propertyID');

        // Simulate an API call to get property details
        $response = Http::get("https://nplled.smggreen.com/api/PropertyRegistration/{$propertyID}");

        if ($response->successful()) {
            $propertyData = $response->json();

            if (isset($propertyData['data']) && !empty($propertyData['data'])) {
                $propertydisplay = $propertyData['data']; // Access the first element of the 'data' array

                // Debug: Log the property data
                \Log::info('Property Data:', $propertydisplay);

                return view('property-detailview', compact('propertydisplay'));
            } else {
                return view('property-detailview')->withErrors(['msg' => 'Property details not found.']);
            }
        } else {
            return view('property-detailview')->withErrors(['msg' => 'Error fetching property details.']);
        }
    }


}
