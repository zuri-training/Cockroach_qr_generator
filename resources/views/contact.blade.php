@extends('layout.layout')
@section('title', 'Contact Us | QR Generator')
@section('content')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <link rel="stylesheet" href="css/contact.module.css">

    <script src="contact.js"></script>

    <main class="container">
        <form action="{{ route('contact-us') }}" method="post">
            @csrf
            <label for="">Name<span class="green-star">*</span>
            </label>
            <br>
            <input type="text" placeholder="John" name='name' required>
            <br>

            <label for="">Email<span class="green-star">*</span>
                <br></label>
            <input type="email" placeholder="Johndoe@gmail.com" name="email" required>
            <br>

            <label for="">Subject<span class="green-star">*</span></label>

            <br>
            <input type="text" placeholder="How can our team help?" name="subject" required>
            <br>

            <label for="">Anything else you'd like us to know?<span class="green-star">*</span> </label>
            <br>

            <textarea id="" cols="30" rows="10" placeholder="Hi QR_gen, I would like to..." name="message"
                required></textarea>
            <br>

            <button id="send-but" type="submit"> <img class="telegram-icon" src="{{ asset('assets/vector.png') }}"> Send
                message</button>
        </form>
        {{-- validation error  --}}
        @foreach ($errors->all() as $error)
            <div style="color: red">{{ $error }}</div>
        @endforeach
        @if (session()->has('msg'))
            <div style="color: green">{{ session()->get('msg') }}</div>
        @endif
    </main>

@endsection
