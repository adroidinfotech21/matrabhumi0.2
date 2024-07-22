<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Exception as LaravelException;
use Exception;



class deletecontroller extends Controller
{
    public function destroy($id)
    {
        $client = new Client();

        try {
            $response = $client->request('DELETE', 'https://nplled.smggreen.com/api/AspNetUser/' . $id, [
                'headers' => [
                    'Authorization' => 'Bearer YOUR_ACCESS_TOKEN', // Replace with your actual token
                    'Accept' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return redirect()->back()->with('success', 'User deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to delete user');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete user: ' . $e->getMessage());
        }
    }

    public function deleteProperty(Request $request, $propertyId)
    {
        $client = new Client();

        // Validate the provided property ID
        $request->validate(['propertyId' => 'required|numeric']);

        try {
            $response = $client->delete("https://nplled.smggreen.com/api/PropertyRegistration/$propertyId", [
                // Add any necessary headers for authentication or authorization (if required)
                // 'headers' => [
                //     'Authorization' => 'Bearer YOUR_API_KEY', // Replace with your actual header name and value
                // ],
            ]);

            if ($response->getStatusCode() === 204) {
                // Success! The record has been deleted
                return response()->json([
                    'success' => true,
                    'message' => 'Property deleted successfully!',
                ]);
            } else {
                // Handle the error case (non-204 status code)
                $errorData = json_decode($response->getBody(), true);
                $errorMessage = $errorData['message'] ?? 'An error occurred while deleting the property.';
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                ]);
            }
        } catch (Exception $e) {
            // Handle any exceptions that might occur during the request
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred: ' + $e->getMessage(), // Use concatenation for clarity
            ]);
        }
    }
}
