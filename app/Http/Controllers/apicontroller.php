<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\viwe;

class apicontroller extends Controller
{
    public function getallpost(){
       $response= Http::get('https://nplled.smggreen.com/api/AspNetUser');
    //    dd( $response->collect());
       return view('allpost', ['data' =>  $response->collect()]);
    }
    public function adduser(){
        $response= Http::post('https://nplled.smggreen.com/api/AspNetUser',[
            'userName'=>'shivam',
            'email' =>'shivambeldar@gmail.com',
            'phoneNumber'=>'8821954778',
            'roleName'=>'agent',
           
        ]);
        dd($response->json());
     }
}
