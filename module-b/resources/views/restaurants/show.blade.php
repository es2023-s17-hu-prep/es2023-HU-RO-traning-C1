@extends("layouts.dashboard")
@section("dashboard-content")
    <div class="d-flex gap-3">
        <span>
            <p>Restaurant Name</p>
            <input type="text" readonly value="{{ $restaurant->name }}">
        </span>
        <span>
            <p>Cusine</p>
            <input type="text" readonly value="{{ $restaurant->cusine }}">
        </span>
        <span>
            <p>Location</p>
            <input type="text" readonly value="{{ $restaurant->location }}">
        </span>
    </div>
    <div class="container">
        <div class="row">
            <a href="{{ route("restaurants.edit", ["restaurant" => $restaurant]) }}" class="col btn btn-secondary">edit profile</a>
            <a href="{{ route("restaurants.menus.index", ["restaurant" => $restaurant]) }}" class="col btn btn-secondary">manage menu</a>
        </div>
        <div class="row">
            <a href="" class="col btn btn-secondary">reservations</a>
            <a href="{{ route("restaurants.reviews.index", ["restaurant" => $restaurant]) }}" class="col btn btn-secondary">reviews</a>
        </div>
    </div>
@endsection