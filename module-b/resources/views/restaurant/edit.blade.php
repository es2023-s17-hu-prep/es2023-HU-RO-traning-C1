@extends('layouts.base')

@section('content')


<div class="auth-container">
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

    <form class="auth-card" action="/restaurant" method="POST">
        @csrf
        @method('put')

        <img src="/logo.png" alt="Logo" />

        <h1>Edit Restaurant</h1>

        <input value="{{old('name') ?? auth()->user()->restaurant->name}}" @error('name') class="error" @enderror placeholder="Name" name="name" />
        <input value="{{old('cuisine') ?? auth()->user()->restaurant->cuisine}}" @error('cuisine') class="error" @enderror placeholder="Cuisine" name="cuisine" />
        <input value="{{old('location') ?? auth()->user()->restaurant->location}}" @error('location') class="error" @enderror placeholder="Location" name="location" />

        <div class="auth-line">
            <a href="/dashboard" class="button secondary">Cancel</a>
            <button class="button">Save</button>
        </div>
    </form>
</div>
@endsection
