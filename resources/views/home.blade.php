@extends('layout.layout')
@section('title', 'Home | QR Generator')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/choosestyle.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <main>
        <section class="section1">
            <h1 class="stages">
                <span class="first-stage colored">1</span><span class="second-stage colored">Upload</span>
            </h1>
            <img src="assets/Arrow1.png" alt="arrow-1" class="arrow-1" />
            <h1 class="stages">
                <span class="first-stage border">2</span><span class="second-stage">Download</span>
            </h1>
        </section>
        <div class="main-section">
            <section class="section2">
                <div class="qr-type">
                    <span class="line"></span>
                    <h2 class="heading2">Static QR Code</h2>
                    <span class="line"></span>
                </div>
                <div class="uploads">
                    <div class="container">
                        <img src="assets/pdf-icon.png" alt="pdf-icon" class="img-container" />
                        <div>
                            <h3>PDF</h3>
                            <p>Share PDF Document</p>
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets/url-icon.png" alt="url-icon" class="img-container" />
                        <div>
                            <h3>Website URL</h3>
                            <p>Link to a Website URL</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('url') }}" method="post" class="upload-form">
                    @csrf
                    <label for="url" class="url-label">Submit URL for your QR Code
                        <div class="url-generate">
                            <input name="url" id="url" type="url" placeholder="https://www.example.com"
                                class="input_" required />
                            <button type="submit" class="button generate">Generate</button>
                        </div>
                    </label>
                </form>
                <br />
                <form action="{{ route('pdf') }}" method="post" class="form2" enctype="multipart/form-data">
                    @csrf
                    <div class="flex">
                        <label for="pdf" class="pdf-label">Submit PDF
                            <div class="generate-div">
                                <p>Browse files or drag file here</p>
                            </div>

                            <input type="file" id="pdf" name="pdf" accept="application/pdf" required />
                        </label>
                        <button class="button pdf" type="submit">Generate</button>
                    </div>
                </form>
            </section>
            <section class="section3">
                <h2>QR Code</h2>
                <hr />
                <img src="assets/qr-codestyle.png" alt="qr-code" />
            </section>
        </div>
        <section class="back">
            <a href="dashboard_1.html">
                <img src="assets/arrow2.png" alt="arrow" class="back-arrow" />
            </a>
            <h4 class="colored back-word">Back</h4>
        </section>
    </main>
    {{-- <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Logout">
    </form>
    <h4>Generate QRCode</h4>

    <h5>url</h5>
    <form action="{{ route('url') }}" method="post">
        @csrf
        <input type="text" name="url" required>
        <input type="submit" value="Generate">

    </form>

    <h5>pdf</h5>
    <form action="{{ route('pdf') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf">
        <input type="submit" value="Generate">

    </form> --}}

    {{-- 
    @foreach ($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
    @endforeach --}}

@endsection
