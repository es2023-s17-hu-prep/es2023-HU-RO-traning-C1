<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Menu items</h1>
    @foreach ($items as $item)
    <p>Name: {{$item->name}}</p>
    <p>Price: {{$item->price}}</p>
   <h1>------------------------------------------------</h1>

    @endforeach
    <a href="/manage-menu/{{$index}}/create">Create</a>
</body>
</html>