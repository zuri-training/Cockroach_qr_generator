@extends('layout.layout')
@section('title', 'Login | QR Generator')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">

    <main class="main">
        <div class="r-container">
            {{-- validation error  --}}
            @foreach ($errors->all() as $error)
                <div style="color: red">{{ $error }}</div>
            @endforeach
            @if (session()->has('msg'))
                <div style="color: red;">{{ session()->get('msg') }}</div>
            @endif

            @if (session()->has('msg2'))
                <div style="color: green;">{{ session()->get('msg2') }}</div>
            @endif

            <div class="logo">
                <img src="{{ asset('assets/qr_icons/logo33.png') }}" alt="icon">
                <h1>Welcome Back</h1>
                <p>Start The Adventure</p>
            </div>
            <form action="{{ route('login-proceed') }}" method="POST">
                @csrf
                <div class="dtype">
                    <label for="email">Email</label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="Johndoe@gmail.com" required>
                </div>
                <div class="dtype">
                    <label for="pass">Password</label>
                    <br>
                    <input type="password" id="pass" name="password" required>
                </div>
                <div class="rem">
                    <div class="remember_me">
                        <input type="checkbox" name="remember-me" id="remember-me">
                        <label for="remember-me">Remember me </label>
                    </div>
                    <div class="forgot" id="s-popup">
                        <a href="{{ route('forget-password') }}"> Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" class="login-btn" id="btn">Login</button>
                <div class="signup-link">
                    <span class="users">Don't have an account yet? <a href="{{ route('register') }}">Sign up</a></span>
                </div>
            </form>
        </div>
    </main>

@endsection
