<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Page | QR_Gen</title>
</head>

<body>
    <h4>Reset Page</h4>

    <form action="{{ route('password-reset', $token) }}" method="post">
        @csrf
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <input type="submit" value="reset">
    </form>
</body>

</html>
