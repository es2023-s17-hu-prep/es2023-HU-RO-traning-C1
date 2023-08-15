@extends('layout.auth-layout')

@section('content')
    <form action="login" method="post" class="shadow-xl flex flex-col gap-3 p-3 w-96 bg-white rounded-lg text-center">
        <h1 class="text-3xl font-bold mb-4">Login</h1>
        @if(session('message'))
            <div class="bg-red-600 text-white rounded-md p-3 text-left">
                {{session('message')}}
            </div>
        @endif

        @include('components.errors')

        @csrf
        <input class="bg-gray-100 p-2 rounded" type="text" name="email" placeholder="Email">
        <input class="bg-gray-100 p-2 rounded" type="password" name="password" placeholder="Password">

        <button type="submit" class="bg-blue-600 rounded-lg hover:bg-blue-500 text-white font-bold p-3 mt-4">Login</button>
        <a href="register" class="bg-gray-600 rounded-lg hover:bg-gray-500 text-white font-bold p-3">Register</a>
    </form>
@endsection
