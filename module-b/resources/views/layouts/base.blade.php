<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DineEase Admin</title>

    <link rel="stylesheet" href="/index.css">
</head>

<body class="antialiased">
    @yield('content')
</body>

</html>