<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class profilecontroller extends Controller
{
    public function profileshow()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('user-profile', compact('user'));
        } else {
            return redirect()->route('login');
        }
    }
}
