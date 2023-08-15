@extends('layout.auth-layout')

@section('content')
    <form autocomplete="off" enctype="multipart/form-data" action="register" method="post" class="shadow-xl flex flex-col gap-3 p-3 w-96 bg-white rounded-lg text-center">
        <h1 class="text-3xl font-bold mb-4">Register</h1>
        @if(session('message'))
            <div class="bg-red-600 text-white rounded-md p-3 text-left">
                {{session('message')}}
            </div>
        @endif

        @include('components.errors')

        @csrf
        <input class="bg-gray-100 p-2 rounded" type="text" name="name" placeholder="Restaurant name" autofocus value="{{old('name')}}">
        <div class="flex flex-row gap-2">
            <input class="bg-gray-100 w-full p-2 rounded" type="text" name="cuisine" placeholder="Cuisine" value="{{old('cuisine')}}">
            <input class="bg-gray-100 w-full p-2 rounded" type="text" name="location" placeholder="Location" value="{{old('location')}}">
        </div>
        <input class="bg-gray-100 w-full p-2 rounded" type="file" name="logo" placeholder="Logo">

        <hr>

        <input autocomplete="off" class="bg-gray-100 p-2 rounded" type="text" name="userName" placeholder="Your Name" value="{{old('userName')}}">
        <input autocomplete="off" class="bg-gray-100 p-2 rounded" type="text" name="email" placeholder="Email" value="{{old('email')}}">
        <input autocomplete="off" class="bg-gray-100 p-2 rounded" type="password" name="password" placeholder="Password">


        <button type="submit" class="bg-blue-600 rounded-lg hover:bg-blue-500 text-white font-bold p-3 mt-4">Register</button>
        <a href="/" class="bg-gray-600 rounded-lg hover:bg-gray-500 text-white font-bold p-3">Back to login</a>
    </form>
@endsection
