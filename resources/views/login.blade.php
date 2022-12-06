<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | QR_Gen</title>
</head>

<body>
    <h4>Login</h4>
    <form action="{{ route('login-proceed') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>

</html>
