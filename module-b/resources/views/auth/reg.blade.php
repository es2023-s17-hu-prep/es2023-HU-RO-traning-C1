@extends('layouts.base')

@section('content')
<div class="auth-container">
    <form class="auth-card" action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        
        <img src="/logo.png" alt="Logo" />

        <h1>Registration</h1>

        @error('regError')
            <div class="alert">
                {{ $message }}
            </div>
        @enderror

        <input @error('restaurantName') class="error" @enderror placeholder="Restaurant Name" name="restaurantName" />
        <div class="auth-line">
            <input @error('cuisine') class="error" @enderror placeholder="Cuisine" name="cuisine" />
            <input @error('location') class="error" @enderror placeholder="Location" name="location" />
        </div>
        <input @error('logo') class="error" @enderror placeholder="Logo" type="file" name="logo" />

        <div class="divider"></div>

        <input @error('name') class="error" @enderror placeholder="Name" name="name" />
        <input @error('email') class="error" @enderror placeholder="Email" type="email" name="email" />
        <input @error('password') class="error" @enderror placeholder="Password" name="password" type="password" />

        <button class="button">Create Restaurant</button>
        <a href="/login" class="button secondary">Back to Log In</a>
    </form>
</div>
@endsection