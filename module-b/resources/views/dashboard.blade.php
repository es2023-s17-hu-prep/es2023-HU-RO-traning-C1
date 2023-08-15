@extends('layout.base-layout')

@section('content')
    <div class="flex flex-col items-center justify-center h-full gap-2">
        <div class="flex gap-2">
            <input type="text" class="bg-gray-300 text-gray-900 border rounded-md p-2" value="{{$restaurant->name}}" disabled />
            <input type="text" class="bg-gray-300 text-gray-900 border rounded-md p-2" value="{{$restaurant->cuisine}}" disabled />
            <input type="text" class="bg-gray-300 text-gray-900 border rounded-md p-2" value="{{$restaurant->location}}" disabled />
        </div>
        <div class="flex gap-2">
            <a href="profile" class="flex flex-col items-center gap-4 border rounded-md bg-gray-300 p-3 w-72">
                <img src="edit-icon.png" alt="Profile">
                Edit profile
            </a>
            <a href="menu" class="flex flex-col items-center gap-4 border rounded-md bg-gray-300 p-3 w-72">
                <img src="restaurant-icon.png" alt="Menu">
                Manage menu
            </a>
        </div>
        <div class="flex gap-2">
            <a href="#" class="flex flex-col items-center gap-4 border rounded-md bg-gray-300 p-3 w-72">
                <img src="table-icon.png" alt="Reservations">
                Reservations
            </a>
            <a href="reviews" class="flex flex-col items-center gap-4 border rounded-md bg-gray-300 p-3 w-72">
                <img src="review-icon.png" alt="Profile">
                Reviews
            </a>
        </div>
    </div>
@endsection
