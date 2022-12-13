<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    function index()
    {
        return view('contact');
    }


    function contact(Request $request)
    {
        $message = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'subject' => 'string|required',
            'message' => 'string|required',
        ]);
        Mail::to($request->email)->send(new Contact($message));
        return back()->with('msg', 'Sent Successfully');
    }
}