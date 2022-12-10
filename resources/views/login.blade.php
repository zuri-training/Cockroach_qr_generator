@extends('layout.layout')
@section('title', 'Login | QR Generator')
@section('content')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">

    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <div class="r-container">
        <div class="logo">
            <svg width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M55.9614 0H0V55.9613H55.9614V0ZM46.0676 9.89371H9.89372V46.0676H46.0676V9.89371Z" fill="#44CF63" />
                <rect x="21.9517" y="21.6432" width="12.3671" height="12.3671" fill="#44CF63" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M128 0H72.0386V55.9613H128V0ZM118.107 9.89368H81.9335V46.0676H118.107V9.89368Z" fill="#5683F6" />
                <rect x="93.9902" y="21.6432" width="12.3671" height="12.3671" fill="#5683F6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M55.9614 72.0382H0V128H55.9614V72.0382ZM46.0676 81.9319H9.89372V118.106H46.0676V81.9319Z"
                    fill="#5683F6" />
                <rect x="21.9517" y="93.6823" width="12.3671" height="12.3671" fill="#5683F6" />
            </svg>
            <h1>Welcome Back</h1>
            <p>Start The Adventure</p>
        </div>
        <form action="" method="post">
            <div class="dtype">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="email" placeholder="Johndoe@gmail.com" required>
            </div>
            <div class="dtype">
                <label for="email">Password</label>
                <input type="password" id="pass" name="password1" value="email" placeholder="8+ characters"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>
            </div>
            <div class="rem">
                <div class="remember_me">
                    <input type="checkbox" name="remember-me" id="remember-me">
                    <label for="remember-me">Remember me </label>
                </div>
                <div class="forgotps" id="s-popup">
                    <a href="#popup"> Forgot Password?</a>
                </div>
            </div>
            <div id="sign_up">
                <button type="submit" id="btn">Login</button>
            </div>
            <div class="login_button">
                <div class="users">Don't have an account yet? <a href="register.html">Sign up</a></div>
            </div>
        </form>
    </div> --}}

    <h4>Login</h4>
    <form action="{{ route('login-proceed') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
        <br>
        <a href="{{ route('forget-password') }}">Forget password?</a>
        <a href="{{ route('register') }}">Register</a>

    </form>

    @if (session()->has('msg'))
        <p style="color: red;">{{ session()->get('msg') }}</p>
    @endif

    @if (session()->has('msg2'))
        <p>{{ session()->get('msg2') }}</p>
    @endif
@endsection
