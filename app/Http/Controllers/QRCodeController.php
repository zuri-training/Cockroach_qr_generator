<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Url;
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
            return back();
        }
        return view('qrcode');
    }

    function url(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        // return $request->url;

        Url::create([
            'url_link' => $request->url,
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('qrcode')->with('url_link', $request->url);
    }

    function pdf(Request $request)
    {
        $request->validate([
            'pdf' => 'required|max:15000'
        ]);

        $pdf = $request->file('pdf');
        $extension = $pdf->getClientOriginalExtension();
        $pdf_name = rand(100, 199) . time() . '.' . $extension;
        $pdf->move('uploads/pdf', $pdf_name);
        // return $request->url;

        File::create([
            'filename' => $pdf_name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('qrcode')->with('filename', $pdf_name);
    }
}