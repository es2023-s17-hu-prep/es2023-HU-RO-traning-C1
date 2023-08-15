@extends('layouts.base')

@section('content')
<nav>
    <img src="/logo.png" alt="Logo" />

    @if(auth()->user()->role == 'dineEasyAdmin')
        <form method="POST" action="/admin/backToAdmin" class="mla">
            @csrf
            <button class="button secondary">Admin</button>
        </form>
    @endif

    <form method="POST" action="/logout" @if(auth()->user()->role != 'dineEasyAdmin') class="mla" @endif>
        @csrf
        <button class="button secondary">Logout</button>
    </form>

    <a class="button secondary" href="/dashboard">Back to Dashboard</a>
</nav>

<main class="reviews">
    @foreach (auth()->user()->restaurant->menus as $menu)
        <div class="menu">
            <div>{{$menu->dish_name}} - {{$menu->price}}</div>
            
            <a href="/menu/update/{{$menu->id}}" class="button secondary mla">Update</a>
            <form class="auth-line" method="POST" action="/menu/{{$menu->id}}">
                @csrf
                @method('delete')
                <button class="button">Delete</button>
            </form>
        </div>
    @endforeach

    <a href="/menu/create" class="button secondary mla">Add Menu</a>
</main>
@endsection