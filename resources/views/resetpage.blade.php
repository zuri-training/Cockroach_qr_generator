@extends('layout.layout')
@section('title', 'Password Reset | QR Generator')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="css/login&register.module.css"> --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <main class="main">
        <!------------------forgot password popup------------------>
        <div class="popup new-pass">
            <div class="logo">
                <h1>Let's get you a new password</h1>
                <p>Create a new password for your account</p>
            </div>
            <form action="{{ route('password-reset', $token) }}" method="post">
                @csrf
                <div class="dtype">
                    <label for="password">New Password</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="dtype">

                    <label for="pass">Confirm Password</label>
                    <br>
                    <input type="password" id="pass" name="password_confirmation" required>
                </div>
                <div class="reset">
                    <button type="submit" class="login-btn">Reset Password</button>
                </div>
            </form>
        </div>
    </main>
    <div class="message">
        <ul>
            {{-- validation error  --}}
            @foreach ($errors->all() as $error)
                <li style="font-size:12px;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    {{-- validation error  --}}
    @foreach ($errors->all() as $error)
        <div style="color: red">{{ $error }}</div>
    @endforeach

    <script type="text/javascript" src="{{ asset('js/forgotpassword.js') }}"></script>
@endsection
