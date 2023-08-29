@extends('layout.auth')

@section('content')
    <form action="/register" enctype="multipart/form-data" method="POST" class="w-full flex flex-col gap-4">
        <h1 class="text-3xl mx-auto font-bold">Registration</h1>

        @if(session('error'))
            <div class="rounded border border-red-600 text-red-600 bg-red-300 p-2">
                {{session('error')}}
            </div>
        @endif

        @csrf

        {{-- Restaurant Name field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="name" class="font-bold">Restaurant Name</label>
            <input id="name" type="text" name="name" placeholder="name" class="p-2 border rounded-sm w-full">
            @error('name')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        <div class="flex gap-2">
            {{-- Cuisine field --}}
            <div class="flex flex-col gap-1 w-full">
                <label for="cuisine" class="font-bold">Cuisine</label>
                <input id="cuisine" type="text" name="cuisine" placeholder="cuisine"
                       class="p-2 border rounded-sm w-full">
                @error('cuisine')
                <div class="text-red-500 mt-2">{{$message}}</div>
                @enderror
            </div>

            {{-- Location field --}}
            <div class="flex flex-col gap-1 w-full">
                <label for="location" class="font-bold">Location</label>
                <input id="location" type="text" name="location" placeholder="location"
                       class="p-2 border rounded-sm w-full">
                @error('location')
                <div class="text-red-500 mt-2">{{$message}}</div>
                @enderror
            </div>
        </div>

        {{-- Logo --}}
        <input type="file" name="file" placeholder="Upload logo" class="p-2 border rounded-sm w-full">

        <hr>

        {{-- Email field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="email" class="font-bold">Email</label>
            <input id="email" type="email" name="email" placeholder="email" class="p-2 border rounded-sm w-full">
            @error('email')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- User name field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="user_name" class="font-bold">User name</label>
            <input id="user_name" type="text" name="user_name" placeholder="user_name"
                   class="p-2 border rounded-sm w-full">
            @error('user_name')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="password" class="font-bold">Password</label>
            <input id="password" type="password" name="password" placeholder="password"
                   class="p-2 border rounded-sm w-full">
            @error('password')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>


        {{-- Register button --}}
        <button type="submit" class="p-2 font-bold text-center text-white bg-blue-600 hover:bg-blue-700 rounded transition">
            Create restaurant
        </button>

        <a href="/login" class="text-blue-500 text-center p-2 hover:bg-gray-100 transition">
            Back to login
        </a>
    </form>
@endsection
