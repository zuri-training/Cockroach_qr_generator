<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/home.module.css') }}">
</head>

<body>
    <header class="header">
        <nav class="nav">
            <img src="{{ asset('assets/logo.png') }}" alt='logo' />
            <ul id="ul" class="normal-nav">
                {{-- <li> <a href="{{ route('home') }}"> QR code</a></li> --}}
                <div class="close-div">
                    <i class="fa-solid fa-x" id="close"></i>
                </div>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <div class="log-reg">
                    @guest
                        <button class="btn"><a class="btn login" href="{{ route('login') }}">Login</a></button>
                        <button class="btn"><a class="btn register" href="{{ route('register') }}">Register</a></button>
                    @endguest
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn login">Logout</button>
                        </form>
                    @endauth
                </div>
            </ul>
            <i class="fa-sharp fa-solid fa-bars" id="menu"></i>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="qrgen">
            <img src="{{ asset('assets/logo.png') }}" alt='logo' />
            <p>Generate QR codes for your files, Download,<br> and share your QR codes.</p>
        </div>
        <div class="links">
            <h4>Links</h4>
            <ul>
                <li><a href="{{ route('login') }}">QR code</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/fd0f757bae.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
