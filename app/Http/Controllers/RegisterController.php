<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    function index()
    {
        return view('register');     // register page
    }

    function create(Request $request)
    {
        // validate input 
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed|max:8|min:4|alpha_num',
        ]);

        $email_exist = User::where('email', $request->email)->first();

        // check if email exists in the db 
        if ($email_exist) {
            return back()->with('msg', 'This email exists in our system');
        }
        // create new user
        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // log in user  
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
    }
}