@extends('layout.base-layout')

@section('content')
    <form action="profile" method="post" class="flex flex-col gap-2 items-start">
        @csrf

        @include('components.errors')

        <input class="bg-gray-100 w-96 p-2 rounded" type="text" name="name" placeholder="Name" value="{{$restaurant->name}}">
        <input class="bg-gray-100 w-96 p-2 rounded" type="text" name="location" placeholder="Location" value="{{$restaurant->location}}">
        <input class="bg-gray-100 w-96 p-2 rounded" type="text" name="cuisine" placeholder="Cuisine" value="{{$restaurant->cuisine}}">

        <div class="flex flex-row gap-2">
            <a href="/home" type="submit" class="bg-gray-600 rounded-lg hover:bg-gray-500 text-white font-bold p-3">Cancel</a>
            <button type="submit" class="bg-blue-600 rounded-lg hover:bg-blue-500 text-white font-bold p-3">Save</button>
        </div>

    </form>
@endsection
