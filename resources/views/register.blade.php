@extends('layout.layout')
@section('title', 'Register | QR Generator')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">
    <div class="r-container">
        <div class="title">
            <h1>Create an account</h1>
        </div>
        <p>By signing up, I agree to QR_gen's <span>Terms</span> and <span>privacy policy.</span></p>
        <form action="{{ route('register-proceed') }}" method="POST">
            <div class="dtype" style="margin-top: 12px;">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Johndoe@gmail.com" required>
            </div>
            <div class="name">
                <div class="first">
                    <label for="email">First name</label>
                    <input type="text" id="Fname" name="fname" placeholder="John" required>
                </div>
                <div>
                    <label for="Lname">Last name</label>
                    <input type="text" id="Lname" name="lname" placeholder="Doe" required>
                </div>
            </div>
            <div class="dtype">
                <label for="password">Password</label>
                <input type="password" id="pass" name="password" required>
                <label for="password">Confirm Password</label>
                <input type="password" id="pass" name="password_confirmation" required>
            </div>
            <div id="sign_up">
                <button type="submit" id="btn">Sign up</button>
            </div>
            <div class="login_button">
                <div class="users">Already have an account? <a href="{{ route('login') }}">Login here</a></div>
            </div>
            @if (session()->has('msg'))
                <div style="color: rgb(196, 195, 195)">{{ session()->get('msg') }}</div>
            @endif

            {{-- validation error  --}}
            @foreach ($errors->all() as $error)
                <div style="color: red">{{ $error }}</div>
            @endforeach
            @csrf
        </form>
    </div>

    <!-------------custom js link-------------------->
    <script type="text/javascript" src="js/forgotpassword.js"></script>
@endsection
