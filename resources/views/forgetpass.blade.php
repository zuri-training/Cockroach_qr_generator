@extends('layout.layout')
@section('title', 'Forget Password | QR Generator')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">
    <!------------------forgot password popup------------------>
    <main class="main">
        <form action="{{ route('link_to_mail') }}" method="POST" class="popup">
            @csrf
            <div class="logo">
                <h1>Forgot Password?</h1>
            </div>
                <p>Please enter your registered email below to receive password reset
                    instruction</p>
            <div class="dtype">
                <label for="email">Email</label>
                <br>
                <input type="email" id="email" name="email"  placeholder="Johndoe@gmail.com" required>
            </div>
            <div class="reset">
                <button type="submit"class="login-btn">Reset Password</button>
                
                <span class="users">Remember
                    password?<a href="{{ route('login') }}">log in</a>
                </span>
            </div>
            @if (session()->has('msg'))
                <div>user with this email doesn't exist</div>
            @endif
            @if (session()->has('msg2'))
                <div>{{ session()->get('msg2') }}</div>
            @endif
        </form>
</main>

    <!-------------custom js link-------------------->
    <script type="text/javascript" src="js/forgotpassword.js"></script>
    <!-- <h4>Forget Password</h4>

    <form action="{{ route('link_to_mail') }}" method="post">
        @csrf
        <input type="email" name="email" id="">
        <input type="submit" value="Reset">
    </form>
    <a href="{{ route('login') }}">Login</a>
 -->

@endsection
