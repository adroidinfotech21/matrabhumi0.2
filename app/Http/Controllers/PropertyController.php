<?php

// app/Http/Controllers/PropertyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

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

    public function getTransactionTypes()
    {
        $client = new Client();

        try {
            $response = $client->get('https://your-api-endpoint/get-transaction-types'); // Assuming GET request

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    return response()->json($data);
                } else {
                    return response()->json(['success' => false, 'message' => 'Failed to fetch transaction types']);
                }
            } else {
                // Handle other status codes (already implemented)
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function registerProperty(Request $request)
    {
        // Validation rules for property data
        $rules = [
            'packageID' => 'required|integer',
            'transactionType' => 'required|integer',
            'addressLine1' => 'required|string|max:255',
            // ... Add validation rules for other properties
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // Handle validation errors
            return back()->withErrors($validator);
        }

        // Prepare data from the request (assuming field names match API requirements)
        $data = [
            "packageID" => $request->input('packageID'),
            "transactionType" => $request->input('transactionType'),
            "data" => [
                "addressLine1" => $request->input('addressLine1'),
                // ... Add other property details for nested "data" key
            ]
        ];

        // Send the POST request with the data
        $client = new Client();

        try {
            $response = $client->post('https://your-api-endpoint/register-property', [
                'headers' => [
                    'Content-Type' => 'application/json' // Set content type to JSON
                ],
                'json' => $data
            ]);

            if ($response->getStatusCode() === 201) {
                // Handle successful registration (e.g., redirect to success page)
                return redirect('/success');
            } else {
                // Handle registration failure (e.g., display error message)
                $error = json_decode($response->getBody(), true)['message'];
                return back()->withErrors(['error' => $error]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Property registration failed: ' . $e->getMessage()]);
        }
    }
}
