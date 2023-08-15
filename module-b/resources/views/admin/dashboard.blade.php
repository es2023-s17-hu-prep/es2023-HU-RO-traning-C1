<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>

   <header>
   <h1>Dashboard</h1> 
   <form action="/logout" method="POST">
   @csrf
   <button>Logout</button>
   </header>
   @if ($user->role === "restaurantAdmin")
    <h1>Name: {{$restaurant->name}}</h1>
    <h1>Cuisine: {{$restaurant->cuisine}}</h1>
    <h1>Location: {{$restaurant->location}}</h1>
   <a href="/manage-menu/{{$restaurant->id}}">Manage Menu</a>
   @endif
   
</form>
</body>
</html>