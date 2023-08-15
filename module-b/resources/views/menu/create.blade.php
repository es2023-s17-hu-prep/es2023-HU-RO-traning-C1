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

    <form class="auth-card" method="POST" action="/menu">
        @csrf

        <img src="/logo.png" alt="Logo" />

        <h1>Create Menu Item</h1>

        <input value="{{old('dish_name')}}" @error('dish_name') class="error" @enderror placeholder="Name" name="dish_name" />
        <input value="{{old('price')}}" @error('price') class="error" @enderror placeholder="Price" name="price" />

        <div class="auth-line">
            <a href="/menu" class="button secondary">Cancel</a>
            <button class="button" type="submit">Create</button>
        </div>
    </form>
</div>
@endsection