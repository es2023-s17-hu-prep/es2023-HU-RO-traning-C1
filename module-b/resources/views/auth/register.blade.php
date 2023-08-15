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
    <h1>Register</h1>
    <form action="/register" method="POST">
       @csrf

      <input type="text" id="name" name="name" placeholder="name">
       @if ($errors->has('name')) 
        <p class="error">{{$errors->get('name')[0]}}</p>
       @endif

      <input type="text" id="cuisine" name="cuisine" placeholder="cuisine">
       @if ($errors->has('cuisine')) 
        <p class="error">{{$errors->get('cuisine')[0]}}</p>
       @endif
      <input type="text" id="location" name="location" placeholder="location">
       @if ($errors->has('location')) 
        <p class="error">{{$errors->get('location')[0]}}</p>
       @endif
      
    <input type="email" id="email" name="email" placeholder="email">
       @if ($errors->has('email')) 
        <p class="error">{{$errors->get('email')[0]}}</p>
       @endif
    <input type="password" id="passoword" name="password" placeholder="password">
       @if ($errors->has('password')) 
        <p class="error">{{$errors->get('password')[0]}}</p>
       @endif
    <button>Create Restaurant</button>
    </form>
    
    <a href="/login">Login</a> 
</body>
</html>