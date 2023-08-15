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
</nav>

<main class="dashboard">
    <section class="restaurant-data">
        @if(auth()->user()->restaurant->logo_url)
            <img src="{{asset('storage/' . auth()->user()->restaurant->logo_url)}}" alt="Logo" />
        @endif

        <input value="{{auth()->user()->restaurant->name}}" disabled />
        <input value="{{auth()->user()->restaurant->cuisine}}" disabled />
        <input value="{{auth()->user()->restaurant->location}}" disabled />
    </section>

    <section class="buttons">
        <a class="button secondary" href="/edit">
            <img src="/edit-icon.png" alt="Icon" />
        </a>
        <a class="button secondary" href="/menu">
            <img src="/restaurant-icon.png" alt="Icon" />
        </a>
        <a class="button secondary" href="#">
            <img src="/table-icon.png" alt="Icon" />
        </a>
        <a class="button secondary" href="/reviews">
            <img src="/review-icon.png" alt="Icon" />
        </a>
    </section>
</main>
@endsection