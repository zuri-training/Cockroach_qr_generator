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
        $info = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'subject' => 'string|required',
            'message' => 'string|required',
        ]);

        // return (new Contact($info))->render();
        Mail::to('aishat.omojole@gmail.com')->send(new Contact($info));
        return back()->with('msg', 'Sent Successfully');
    }
}