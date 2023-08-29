@extends('layout.auth')

@section('content')
    <form action="/login" method="POST" class="w-full flex flex-col gap-4">
        <h1 class="text-3xl mx-auto font-bold">Log In</h1>

        @if(session('error'))
            <div class="rounded border border-red-600 text-red-600 bg-red-300 p-2">
                {{session('error')}}
            </div>
        @endif

        @csrf

        {{-- Email field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="email" class="font-bold">Email</label>
            <div class="w-full relative">
                <img src="/assets/mail-icon.png" alt="Icon" class="absolute top-1/2 left-2 -translate-y-1/2">
                <input id="email" type="email" name="email" placeholder="email" class="p-2 pl-10 border rounded-sm w-full">
            </div>
            @error('email')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="password" class="font-bold">Password</label>
            <div class="w-full relative">
                <img src="/assets/lock-closed-icon.png" alt="Icon" class="absolute top-1/2 left-2 -translate-y-1/2">
                <input id="password" type="password" name="password" placeholder="password"
                       class="p-2 pl-10 border rounded-sm w-full">

            </div>
            @error('password')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Login button --}}
        <button type="submit" class="p-2 font-bold text-center text-white bg-blue-600 hover:bg-blue-700 rounded transition">
            Log in
        </button>

        <a href="/register" class="text-blue-500 text-center p-2 hover:bg-gray-100 transition">
            Register
        </a>
    </form>
@endsection
