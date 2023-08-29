<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DineEase Admin</title>

    {{-- TailwindCss import --}}
    <script src="/tailwindcss.js"></script>

</head>
<body class="antialiased">
    @yield('body')
</body>
</html>
