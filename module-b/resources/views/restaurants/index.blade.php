@extends("layouts.dashboard")
@section("dashboard-content")
    @foreach ($restaurants as $restaurant)
        <a href="{{ route("restaurants.show", ["restaurant" => $restaurant]) }}">
            <div class="border">
                <h2>{{ $restaurant->name }}</h2>
                <p>{{ $restaurant->location }}</p>
            </div>
        </a>
    @endforeach
@endsection