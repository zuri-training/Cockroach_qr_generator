@extends('layout.layout')
@section('title', 'Home | QR Generator')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <section class="heroSection">
        <div class="heroText">
            <h1>Free QR Code Generator</h1>
            <p class="heroDescription">Why type when you can scan? <br />
                Make QR Code for your website or PDF in three easy steps.</p>
            <p class="heroSmallText">Promote Interaction, Engagement and smooth experience.</p>
            <button class="btn"> <a class="btn create" href="login.html">+ Create QR Code</a> </button>
        </div>
        <div class="heroImage">
            <img src="{{ asset('assets/QR-code.png') }}" alt='QR code' />
        </div>
    </section>
    <section class="show">
        <div class="showContainer">
            <div class="showBox">
                <img src="{{ asset('assets/qrcode.png') }}" alt='QR code' />
                <p>Generate QR code </p>
            </div>
            <div class="showBox">
                <img src="{{ asset('assets/download.png') }}" alt='QR code' />
                <p>Download your code </p>
            </div>
            <div class="showBox">
                <img src="{{ asset('assets/share.png') }}" alt='QR code' />
                <p>Share your code </p>
            </div>
        </div>
    </section>
    <div class="brands">
        <h3>Brands Influenced</h3>
        <div>
            <p>Goodspace</p>
            <p>BeautybyTon</p>
            <p>Autos</p>
            <p>EverythingFD</p>
            <p>EverythingFD</p>
            <p>Teams</p>
        </div>
    </div>
    <section class="about">
        <div class="aboutImage">
            <img src="{{ asset('assets/scanning qr code.png') }}" alt="scan qr code">
        </div>
        <div class="aboutText">
            <h3>About QR_gen</h3>
            <p>QR_gen is a website that allows you generate sharable and downloadable codes for your files. </p>
            <div class="aboutBox">
                <i class="fa-sharp fa-solid fa-circle-check fa-3x"></i>
                <p>Create free Static QR codes.</p>
            </div>
            <div class="aboutBox">
                <i class="fa-sharp fa-solid fa-circle-check fa-3x"></i>
                <p>Share or download QR codes.</p>
            </div>
            <div class="aboutBox">
                <i class="fa-sharp fa-solid fa-circle-check fa-3x"></i>
                <p>No coding is required.</p>
            </div>
            <div class="aboutBox">
                <i class="fa-sharp fa-solid fa-circle-check fa-3x"></i>
                <p>Easy to create QR codes.</p>
            </div>
        </div>
    </section>
    <section class="offer">
        <div class="offerText">
            <h3>We Offer the Best </h3>
            <p>Generate QR Codes that store digital information.
                Download as PNG,PDF,JPEG or Share to social media or email.
            </p>
            <button class="btn"> <a class="btn create" href="{{ route('generate') }}">+ Create QR Code</a></button>
        </div>
        <div class="offerImage">
            <img src="{{ asset('assets/image.png') }}" alt="qr code">
        </div>
    </section>
    <section class="howItWorks">
        <h3>How it Works</h3>
        <div>
            <p>Generating QR codes is simple, register with us and get unlimited QR codes for free and access to our
                benefits.</p>
            <p>Ready to get your QR code? Let me show you how with these 3 steps</p>
        </div>
        <div class="containerDiamond">
            <div class="diamondContainer">
                <div class="diamond">
                    <p>1</p>
                </div>
                <div>
                    <p>Choose QR code type</p>
                    <p>This defines what your code does</p>
                </div>
            </div>
            <!-- <hr> -->
            <div class="diamondContainer">
                <div class="diamond">
                    <p>2</p>
                </div>
                <div>
                    <p>Fill in the required fields</p>
                    <p>Put a link or upload a pdf</p>
                </div>
            </div>
            <!-- <hr> -->
            <div class="diamondContainer">
                <div class="diamond">
                    <p>3</p>
                </div>
                <div>
                    <p>Download, share or add to list</p>
                    <p>download or share your code</p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/index.js') }}"></script>

@endsection
