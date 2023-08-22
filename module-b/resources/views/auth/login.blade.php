@extends('layouts.base')

@section('content')
<div class="auth-container">
    <form class="auth-card" action="/login" method="POST">
        @csrf

        <img src="/logo.png" alt="Logo" />

        <h1>Log In</h1>

        @error('authError')
            <div class="alert">
                {{ $message }}
            </div>
        @enderror

        <input value="{{old('email')}}" @error('email') class="error" @enderror placeholder="Email" type="email" name="email" />
        <input @error('password') class="error" @enderror placeholder="Password" name="password" type="password" />

        <button class="button">Log In</button>
        <a href="/register" class="button secondary">Register</a>
    </form>
</div>
@endsection
