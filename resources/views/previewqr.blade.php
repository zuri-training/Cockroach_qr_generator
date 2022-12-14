@extends('layout.layout')
@section('title', 'Preview | QR Generator')
@section('content')
    {{-- <link rel="shortcut icon" href="assets/qr_icons/logo33.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="{{ asset('css/choosestyle.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">



    <main>
        <section class="section1">
            <h1 class="stages">
                <span class="first-stage colored">1</span><span class="second-stage colored">Upload</span>
            </h1>

            <img src="{{ asset('assets/bluearrow.png') }}" alt="bluearrow" class="arrow-1" />
            <h1 class="stages">
                <span class="first-stage border colored colored-first-stage">2</span>
                <span class="second-stage colored">Download</span>
            </h1>
        </section>
        <section class="download-section1">
            {{-- <h2>Congratulations!</h2> --}}
            <h3>Here is your QR Code.</h3>
            {{-- <img src="assets/download-qr.jpg" alt="downloaded-qr-code" /> --}}
            <br>
            <div class="qrcode" style="padding-top:10px;">
                @if ($file)
                    <p class="title">{{ $file->title }}</p>
                    {!! QrCode::size(300)->generate(asset('uploads/pdf') . '/' . $file->filename) !!}
                @elseif ($link)
                    <p class="title">{{ $link->title }}</p>
                    {!! QrCode::size(300)->generate($link->url_link) !!}
                @endif

            </div>
            <div class="choose">
                <div>
                    <button class="button" onclick="chooseFormat()">Download</button>
                    <div class="format">
                        <a href="#" download="QR-code">png</a>
                        <a href="#" download="QR-code">jpeg</a>
                        <a href="#" download="QR-code">pdf</a>
                    </div>
                </div>
                <button class="share" onclick="share()">Share</button>
                <div class="popup display">
                    <button onclick="close()" class="close-bar">
                        <i class="fa-solid fa-x fa-2x"></i>
                    </button>
                    <h4>Share this QR Code via</h4>
                    <ul class="icons">
                        <i class="fa-brands fa-facebook fa-2x"><a href="#"></a></i>
                        <i class="fa-brands fa-twitter fa-2x"><a href="#"></a></i>
                        <i class="fa-brands fa-instagram fa-2x"><a href="#"></a></i>
                        <i class="fa-brands fa-whatsapp fa-2x"><a href="#"></a></i>
                        <i class="fa-brands fa-telegram fa-2x"><a href="#"></a></i>
                    </ul>
                </div>
            </div>
        </section>
        <section class="back-prev">
            <div class="back">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/arrow2.png') }}" alt="arrow" class="back-arrow" />
                </a>
                <h4 class="colored back-word">Back</h4>
            </div>
            <button class="button finish">
                <a href="{{ route('home') }}" class="button finish">
                    Finish
                </a></button>
        </section>
    </main>
    <script src="{{ asset('js/choosestyle.js') }}"></script>
    <script src="https://kit.fontawesome.com/fd0f757bae.js" crossorigin="anonymous"></script>

    {{-- <h4>Download your QR Code</h4> --}}


@endsection
