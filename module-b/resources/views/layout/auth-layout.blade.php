@extends('base')

<main class="flex flex-col gap-32 items-center justify-center w-screen h-screen bg-gray-100">
    <img src="logo.png" alt="Logo" />
    @yield('content')
</main>
