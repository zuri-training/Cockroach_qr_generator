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
                <input type="password" id="password" name="password1"placeholder="8+ characters"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>
            </div>
            <div class="dtype">

                <label for="pass">Confirm Password</label>
                <br>
                <input type="password" id="pass" name="password1"  placeholder="8+ characters"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>
            </div>
                <div class="reset">
                    <button type="reset" class="login-btn" >Reset Password</button>
                </div>

        </form>        
    </div>
</main>

        {{-- 

        <div class="close-btn">&times;</div>
        <div class="title">
            <h1>Let's get you a new password</h1>
        </div>
        <p>Create a new password for your account</p>
        <form action="{{ route('password-reset', $token) }}" method="POST">
            @csrf
            <div class="bling">
                <label for="email">New Password</label>
                <input type="password" id="pass" name="password" value="" placeholder="8+ characters"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>
                <label for="email">Confirm Password</label>
                <input type="password" id="pass" name="password_confirmation" value=""
                    placeholder="8+ characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>
            </div>
            <div id="reset">
                <button type="submit" id="btn" class="reset-btn">Reset Password</a></button>
            </div>
        </form>
    </main> --}}
        <div class="message">
            <ul>
                {{-- validation error  --}}
                @foreach ($errors->all() as $error)
                    <li style="font-size:12px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        <script type="text/javascript" src="{{ asset('js/forgotpassword.js') }}"></script>
        {{-- <h4>Reset Page</h4>

    <form action="{{ route('password-reset') }}" method="post">
        @csrf
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <input type="submit" value="reset">
    </form> --}}
    @endsection
