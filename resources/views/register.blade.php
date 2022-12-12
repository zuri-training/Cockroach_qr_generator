@extends('layout.layout')
@section('title', 'Register | QR Generator')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">
    <main class="main">
        <div class="popup">

        <div class="logo">
            <h1>Create an account</h1>
            <p>By signing up, I agree to QR_gen's <span>Terms</span> and <span>privacy policy.</span></p>
        </div>
        <form action="{{ route('register-proceed') }}" method="POST">
            <div class="dtype" style="margin-top: 12px;">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Johndoe@gmail.com" required>
            </div>
            <div class="name">
                <div class="first">
                    <label for="fname">First name</label>
                    <input type="text" id="fname" name="fname" placeholder="John" required>
                </div>
                <div>
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name="lname" placeholder="Doe" required>
                </div>
            </div>
            <div class="dtype">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="8+ characters" required>
                <label for="pass">Confirm Password</label>
                <input type="password" id="pass" placeholder="8+ characters"name="password_confirmation" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
            <div class="signup__" >
                <button type="submit" class="login-btn ">Sign up</button>
            </div>
            <div class="reset">

                <span class="users">Already have an account? <a href="{{ route('login') }}">Login here</a></span>
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
    </main>

    <!-------------custom js link-------------------->
    <script type="text/javascript" src="js/forgotpassword.js"></script>
@endsection
