<?php

namespace App\Http\Controllers;

use App\Mail\PasswordReset;
use App\Models\Password_Reset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    function index()
    {
        return view('forgetpass');
    }

    function reset_link_to_mail(Request $request)
    {

        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('msg', 'user with this email doesnt exist');
        }

        // create token for user
        Password_Reset::create([
            'user_id' => $user->id,
            'token' => Str::random(70),
        ]);

        // send mail with token to user
        // return (new PasswordReset($user))->render();
        Mail::to($request->email)->send(new PasswordReset($user));
        return back()->with('msg2', 'password sent to mail');
    }


    function reset_page($token)
    {
        return view('resetpage', ['token' => $token]);
    }

    function password_reset(Request $request, $token)
    {
        $request->validate([
            'password' => 'max:8|min:4|alpha_num|confirmed',
        ]);
        // dd($request->password);

        $token = Password_Reset::where('token', $token)->first();

        if (!$token) {
            abort(404);
        }
        $user = User::where('id', $token->user_id)->first();

        $success =  $user->update([
            'password' => bcrypt($request->password)
        ]);

        if (!$success) {
            abort(500);
        }
        $token->delete();
        return redirect()->route('login')->with('msg2', 'password reset success');
    }
};