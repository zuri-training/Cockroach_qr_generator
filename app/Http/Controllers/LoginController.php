<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');   // landing page/login page
    }

    function login(Request $request)
    {
        // validate input 
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check users creds to to log in
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else return back()->with('msg', 'Invalid creds');
    }

    function logout()
    {
        // log out authenticated user 
        Auth::logout();
        return redirect()->route('login');
    }
}