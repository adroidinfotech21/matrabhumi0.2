<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PropertyController extends Controller
{
    public function propertyTypeForm()
    {
        // Fetch property types from the API
        $response = Http::get('https://nplled.smggreen.com/api/DropDown');

        $propertyTypes = $response->json()['data'];

        // Pass the property types to the view
        return view('property_form', ['propertyTypes' => $propertyTypes]);
    }

    public function propertyAddSubmit(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'propertyType' => 'required',
            // other validation rules
        ]);

        // Handle form submission logic
        // ...

        return back()->with('success', 'Form submitted successfully!');
    }
}
