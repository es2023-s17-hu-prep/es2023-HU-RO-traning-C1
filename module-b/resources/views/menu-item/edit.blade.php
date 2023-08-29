@extends('layout.admin')

@section('content')
    {{-- Edit menu item form --}}
    <form action="/menu/{{$menu->id}}" enctype="multipart/form-data" method="POST" class="w-full flex flex-col gap-4">
        @csrf
        @method('PUT')

        <h1 class="text-3xl font-bold">Edit menu item</h1>

        @if(session('error'))
            <div class="rounded border border-red-600 text-red-600 bg-red-300 p-2">
                {{session('error')}}
            </div>
        @endif

        {{-- Name field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="name" class="font-bold">Name</label>
            <input id="name" type="text" name="name" placeholder="name" class="p-2 border rounded-sm w-full" value="{{$menu->name}}">
            @error('name')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Price field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="price" class="font-bold">Price</label>
            <input id="price" type="text" name="price" placeholder="price"
                   class="p-2 border rounded-sm w-full" value="{{$menu->price}}">
            @error('price')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Form actions --}}
        <div class="flex flex-row gap-2">
            <a href="/menu" class="py-2 px-4 rounded text-gray-900 bg-gray-200 hover:bg-gray-300 font-bold">
                Cancel
            </a>
            <button type="submit" class="p-2 font-bold text-center text-white bg-blue-600 hover:bg-blue-700 rounded">
                Save
            </button>
        </div>
    </form>
@endsection
