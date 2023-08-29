@extends('layouts.dashboard')

@section('dashboard')
<main>
    <div class="restaurant-details">
        <div class="input-group">
            <label for="name">Restaurant name</label>
            <input id="name" value="{{auth()->user()->restaurant->name}}" disabled/>
        </div>
        <div class="input-group">
            <label for="cusisine">Cuisine</label>
            <input id="cusisine" value="{{auth()->user()->restaurant->cuisine}}" disabled/>
        </div>
        <div class="input-group">
            <label for="location">Location</label>
            <input id="location" value="{{auth()->user()->restaurant->location}}" disabled/>
        </div>
    </div>

    <div class="dashboard-tiles">
        <a href="/edit" class="dashboard-tile">
            <img src="/edit-icon.png" alt="" />
        </a>
        <a href="/menu" class="dashboard-tile">
            <img src="/restaurant-icon.png" alt="" />
        </a>
        <a href="/reservations" class="dashboard-tile">
            <img src="/table-icon.png" alt="" />
        </a>
        <a href="/reviews" class="dashboard-tile">
            <img src="/review-icon.png" alt="" />
        </a>
    </div>
</main>
@endsection
