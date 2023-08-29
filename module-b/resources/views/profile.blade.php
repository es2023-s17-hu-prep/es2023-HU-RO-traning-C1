@extends('layout.admin')

@section('content')
    {{-- Restaurant profile form --}}
    <form action="/profile" enctype="multipart/form-data" method="POST" class="w-full flex flex-col gap-4">
        <h1 class="text-3xl font-bold">Update profile</h1>

        @if(session('error'))
            <div class="rounded border border-red-600 text-red-600 bg-red-300 p-2">
                {{session('error')}}
            </div>
        @endif

        @csrf

        {{-- Restaurant Name field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="name" class="font-bold">Restaurant Name</label>
            <input id="name" type="text" name="name" placeholder="name" class="p-2 border rounded-sm w-full" value="{{$restaurant->name}}">
            @error('name')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Cuisine field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="cuisine" class="font-bold">Cuisine</label>
            <input id="cuisine" type="text" name="cuisine" placeholder="cuisine"
                   class="p-2 border rounded-sm w-full" value="{{$restaurant->cuisine}}">
            @error('cuisine')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Location field --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="location" class="font-bold">Location</label>
            <input id="location" type="text" name="location" placeholder="location"
                   class="p-2 border rounded-sm w-full" value="{{$restaurant->location}}">
            @error('location')
            <div class="text-red-500 mt-2">{{$message}}</div>
            @enderror
        </div>

        {{-- Logo --}}
        <div class="flex flex-col gap-1 w-full">
            <label for="logo" class="font-bold">Logo</label>
            <div class="flex flex-row items-center gap-2">
                @if($restaurant->logo_path != null)
                    <img class="rounded w-16 h-16 object-cover border-2"
                         src="/storage/{{\Illuminate\Support\Str::remove('public/', $restaurant->logo_path)}}" alt="Image">
                @endif

                <div class="flex flex-col">
                    <input type="file" id="logo" name="file" placeholder="Upload logo" class="p-2 border rounded-sm w-full">
                    @error('logo')
                    <div class="text-red-500 mt-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Form actions --}}
        <div class="flex flex-row gap-2">
            <a href="/dashboard" class="py-2 px-4 rounded text-gray-900 bg-gray-200 hover:bg-gray-300 font-bold">
                Cancel
            </a>
            <button type="submit" class="p-2 font-bold text-center text-white bg-blue-600 hover:bg-blue-700 rounded">
                Update
            </button>
        </div>
    </form>
@endsection
