<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class ApiController extends Controller
{
    public function getallpost(){
       $response= Http::get('https://nplled.smggreen.com/api/AspNetUser');
       dd( $response->collect());
       return view('allpost', ['data' =>  $response->collect()]);
    }
    public function addUser(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
            'roleName' => 'required|string|in:buyer,owner,agent,builder',
        ]);

    

        // Get form data
        $data = [
            'userName' => $request->input('username'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'password' => $request->input('password'),
            'roleName' => $request->input('roleName'),
        ];

     

        // Send data to the .NET API
        $response = Http::post(config('services.api.base_url') . '/login', $data);

      

        // Handle the response
        if ($response->successful()) {
            return redirect('/index')->with('success', 'Registration successful!');
        } else {
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }
}
