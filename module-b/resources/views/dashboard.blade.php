@extends('layout.admin')

@section('content')
    {{-- Dashboard --}}
    <div class="flex flex-col w-full h-full justify-center items-center gap-2">
        {{-- Status message --}}
        @if(session('message'))
            <div class="text-green-600 bg-green-300 border-green-600 rounded-md p-4">
                {{session('message')}}
            </div>
        @endif

        {{-- Main content --}}
        <div class="flex flex-row gap-4 items-center">

            {{-- Restaurant details and logo --}}
            @if($restaurant->logo_path != null)
                <img class="rounded-full w-32 h-32 object-cover border-2"
                     src="/storage/{{\Illuminate\Support\Str::remove('public/', $restaurant->logo_path)}}" alt="Image">
            @endif
            <div class="flex flex-col">
                <span><b>Restaurant name</b>: {{$restaurant->name}}</span>
                <span><b>Cuisine</b>: {{$restaurant->cuisine}}</span>
                <span><b>Location</b>: {{$restaurant->location}}</span>
            </div>
        </div>

        {{-- Dashboard row --}}
        <div class="flex flex-row gap-2">
            <a href="/profile"
               class="flex flex-col w-64 h-64 justify-center items-center gap-2 p-12 bg-gray-300 rounded-lg">
                <img src="/assets/edit-icon.png" alt="Edit">
                Edit profile
            </a>
            <a href="/menu"
               class="flex flex-col w-64 h-64 justify-center items-center gap-2 p-12 bg-gray-300 rounded-lg">
                <img src="/assets/restaurant-icon.png" alt="Menu">
                Manage menu
            </a>
        </div>

        {{-- Dashboard row --}}
        <div class="flex flex-row gap-2">
            <a href="/reservations"
               class="flex flex-col w-64 h-64 justify-center items-center gap-2 p-12 bg-gray-300 rounded-lg">
                <img src="/assets/table-icon.png" alt="Reservations">
                Reservations
            </a>
            <a href="/reviews"
               class="flex flex-col w-64 h-64 justify-center items-center gap-2 p-12 bg-gray-300 rounded-lg">
                <img src="/assets/review-icon.png" alt="Reviews">
                Reviews
            </a>
        </div>
    </div>
@endsection
