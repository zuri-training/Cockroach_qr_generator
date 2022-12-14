@extends('layout.layout')
@section('title', 'Generate | QR Generator')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/choosestyle.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <main>
        <section class="section1">
            <h1 class="stages">
                <span class="first-stage colored">1</span><span class="second-stage colored">Upload</span>
            </h1>
            <img src="{{ asset('assets/Arrow1.png') }}" alt="arrow-1" class="arrow-1" />
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
                        <img src="{{ asset('assets/pdf-icon.png') }}" alt="pdf-icon" class="img-container" />
                        <div>
                            <h3>PDF</h3>
                            <p>Share PDF Document</p>
                        </div>
                    </div>
                    <div class="container">
                        <img src="{{ asset('assets/url-icon.png') }}" alt="url-icon" class="img-container" />
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
                    <input name="title" type="text" placeholder="Give your URL a name" style="width:13rem" required />

                </form>
                <br />
                <form action="{{ route('pdf') }}" method="post" class="form2" enctype="multipart/form-data">
                    @csrf
                    <div class="flex">
                        <label for="pdf" class="pdf-label">Submit PDF
                            <div class="generate-div">
                                <p>Browse files or drag file here</p>
                            </div>
                            <input name="title" type="text" placeholder="Give your PDF a name" required />

                            <input type="file" id="pdf" name="pdf" accept="application/pdf" required />
                            <br>
                        </label>

                        <button class="button pdf" type="submit">Generate</button>
                    </div>
                </form>
            </section>
            <section class="section3">
                <h2>QR Code</h2>
                <hr />
                <img src="{{ asset('assets/qr-codestyle.png') }}" alt="qr-code" />
            </section>
        </div>
        <section class="back">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/arrow2.png') }}" alt="arrow" class="back-arrow" />
            </a>
            <h4 class="colored back-word">Back</h4>
        </section>
    </main>

    @foreach ($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
    @endforeach

@endsection
