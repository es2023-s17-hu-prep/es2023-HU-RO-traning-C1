@extends('layouts.dashboard')

@section('dashboard')
    <div class="restaurant-list">
        <h1>Select Restaurant</h1>
        @foreach ($restaurants as $restaurant)
            <form method="POST" action="/jump-in/{{$restaurant->id}}">
                @csrf
                <button class="button-secondary">{{ $restaurant->name }}</button>
            </form>
        @endforeach
    </div>
@endsection
