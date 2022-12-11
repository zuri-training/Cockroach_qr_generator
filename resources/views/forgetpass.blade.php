<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password | QR_Gen</title>
</head>

<body>
    <h4>Forget Password</h4>

    <form action="{{ route('link_to_mail') }}" method="post">
        @csrf
        <input type="email" name="email" id="">
        <input type="submit" value="Reset">
    </form>
    <a href="{{ route('login') }}">Login</a>

    @if (session()->has('msg'))
        <p>user with this email doesn't exist</p>
    @endif
    @if (session()->has('msg2'))
        <p>{{ session()->get('msg2') }}</p>
    @endif
</body>

</html>
