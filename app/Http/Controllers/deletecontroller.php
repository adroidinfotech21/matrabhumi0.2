<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Exception as LaravelException;
use Exception;


use Illuminate\Support\Facades\Http;


class deletecontroller extends Controller
{


    public function deleteProperty($propertyID)
    {
        $apiUrl = 'https://nplled.smggreen.com/api/Delete/PropertyRegistration';

        try {
            $response = Http::post($apiUrl, [
                'propertyID' => $propertyID,
            ]);

            if ($response->successful()) {
                return redirect()->back()->with('success', 'Property deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to delete property');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the property: ' . $e->getMessage());
        }
    }


}
