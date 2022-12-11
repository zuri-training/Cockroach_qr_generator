@extends('layout.layout')
@section('title', 'Forget Password | QR Generator')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login&register.module.css') }}">
    <!------------------forgot password popup------------------>
    <section id="popup" class="popup">
        <div class="close-btn">&times;</div>
        <form action="{{ route('link_to_mail') }}" method="POST">
            @csrf
            <div class="title">
                <h1>Forgot Password?</h1>
                <p>Please enter your registered email below to receive password reset
                    instruction</p>
            </div>
            <div class="pop-form">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="" placeholder="Johndoe@gmail.com" required>
            </div>
            <div class="reset" id="popup">
                <button type="submit" id="reset" style="color: #FBFBFB;">Reset Password</button>
            </div>
            <div class="users">Remember
                password?<a href="{{ route('login') }}">log in</a>
            </div>
            @if (session()->has('msg'))
                <div>user with this email doesn't exist</div>
            @endif
            @if (session()->has('msg2'))
                <div>{{ session()->get('msg2') }}</div>
            @endif
        </form>
        </div>
    </section>

    <!-------------custom js link-------------------->
    <script type="text/javascript" src="js/forgotpassword.js"></script>
    <h4>Forget Password</h4>

    <form action="{{ route('link_to_mail') }}" method="post">
        @csrf
        <input type="email" name="email" id="">
        <input type="submit" value="Reset">
    </form>
    <a href="{{ route('login') }}">Login</a>


@endsection
