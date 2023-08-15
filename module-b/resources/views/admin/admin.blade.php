@extends('layouts.base')

@section('content')
<nav>
    <img src="/logo.png" alt="Logo" />

    <form method="POST" action="/logout" class="mla">
        @csrf
        <button class="button secondary">Logout</button>
    </form>
</nav>

<main class="admin-restaurants">
    @foreach ($restaurants as $restaurant)
    <form method="POST" action="/admin/updateRestaurantId">
        @method('patch')
        @csrf
        <input type="hidden" value="{{$restaurant->id}}" name="restaurantId" />
        <button class="button secondary">{{$restaurant->name}}</button>
    </form>
    @endforeach
</main>
@endsection