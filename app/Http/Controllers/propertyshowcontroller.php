<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class propertyshowcontroller extends Controller
{
    public function index()
    {
        // Fetch the property details from your database or another source
        $properties = Property::all();

        // Return the property data as JSON
        return response()->json([
            'success' => true,
            'data' => $properties
        ]);
    }
}
