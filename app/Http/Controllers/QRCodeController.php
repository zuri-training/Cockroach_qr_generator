<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Url;
use App\Models\User;
use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    function index()
    {
        $files = File::where('user_id', auth()->id())->get();
        $links = Url::where('user_id', auth()->id())->get();
        return view('home', ['files' => $files, 'links' => $links]);
    }

    function generate()
    {
        return view('generateqr');
    }

    function qrcode()
    {
        if (!session()->has('url_link') && !session()->has('filename')) {
            return redirect('home');
        }
        return view('qrcode');
    }

    function preview_file($id)
    {
        $user = User::where('id', auth()->id())->first();
        $file = File::where('id', $id)->where('user_id', $user->id)->first();
        if (!$file) {
            abort(404);
        }
        return view('previewqr', [
            'file' => $file,
            'link' => null
        ]);
    }

    function preview_url($id)
    {
        $user = User::where('id', auth()->id())->first();
        $url = Url::where('id', $id)->where('user_id', $user->id)->first();
        if (!$url) {
            abort(404);
        }
        return view('previewqr', [
            'link' => $url,
            'file' => null
        ]);
    }

    function url(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required|string'
        ]);

        Url::create([
            'url_link' => $request->url,
            'user_id' => auth()->id(),
            'title' => $request->title
        ]);
        return redirect()->route('qrcode')->with('url_link', $request->url);
    }

    function pdf(Request $request)
    {
        $request->validate([
            'pdf' => 'required|max:15000',
            'title' => 'required|string'
        ]);

        $pdf = $request->file('pdf');
        $extension = $pdf->getClientOriginalExtension();
        $pdf_name = rand(100, 199) . time() . '.' . $extension;
        $pdf->move('uploads/pdf', $pdf_name);
        // return $request->url;

        File::create([
            'filename' => $pdf_name,
            'user_id' => auth()->id(),
            'title' => $request->title
        ]);

        return redirect()->route('qrcode')->with('filename', $pdf_name);
    }
}