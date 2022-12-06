<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | QR_Gen</title>
</head>

<body>

    <h3>Register</h3>
    <form action="{{ route('register-proceed') }}" method="post">
        @csrf
        <input type="text" name="fname" placeholder="first Name">
        <input type="text" name="lname" placeholder="last Name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <input type="submit" value="Register">
    </form>

    @if (session()->has('msg'))
        <p>email exists</p>
    @endif

    <ul>
        {{-- validation error  --}}
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</body>

</html>
