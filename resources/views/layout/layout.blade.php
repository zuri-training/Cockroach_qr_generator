<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <img src="./assets/logo.png" alt='logo' />
            <ul id="ul">
                <li> <a href="login.html"> QR code</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <div>
                    @guest
                        <button class="btn"><a class="btn login" href="login.html">Login</a></button>
                        <button class="btn"><a class="btn register" href="register.html">Register</a></button>
                    @endguest
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn register">Logout</button>
                        </form>
                    @endauth


                    <button id="close">X</button>

                </div>
            </ul>
            <button id="menu">Menu</button>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="qrgen">
            <img src="./assets/logo.png" alt='logo' />
            <p>Generate QR codes for your files, Download,<br> and share your QR codes.</p>
        </div>
        <div class="links">
            <h4>Links</h4>
            <ul>
                <li><a href="login.html">QR code</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>
