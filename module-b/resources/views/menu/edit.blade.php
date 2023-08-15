@extends('layout.base-layout')

@section('content')
    <h1 class="text-2xl font-bold">Edit menu item</h1>
    <form action="/menu/{{$menu->id}}" method="post" class="flex flex-col gap-2 items-start">
        @csrf
        @method("PUT")

        @include('components.errors')

        <input class="bg-gray-100 w-96 p-2 rounded" type="text" name="name" placeholder="Name" value="{{$menu->name}}">
        <input class="bg-gray-100 w-96 p-2 rounded" type="text" name="price" placeholder="Price" value="{{$menu->price}}">

        <div class="flex flex-row gap-2">
            <a href="/menu" type="submit" class="bg-gray-600 rounded-lg hover:bg-gray-500 text-white font-bold p-3">Cancel</a>
            <button type="submit" class="bg-blue-600 rounded-lg hover:bg-blue-500 text-white font-bold p-3">Save</button>
        </div>

    </form>
@endsection
