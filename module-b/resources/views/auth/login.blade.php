<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
    <input type="email" id="email" name="email">
    @if ($errors->has('email')) 
    <p class="error">{{$errors->get('email')[0]}}</p>
   @endif
    <input type="password" id="passoword" name="password">
    @if ($errors->has('password')) 
    <p class="error">{{$errors->get('password')[0]}}</p>
   @endif
    <button>Login</button>
    </form>

    <a href="/register">Register</a>
</body>
</html>