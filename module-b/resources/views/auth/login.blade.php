@extends('layouts.base')

@section('content')
    <div class="form-wrapper">
        <form class="form-container" method="POST" action="/login">
            @csrf

            <h1>Login</h1>

            @error('authError')
                <div class="alert">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <label for="email">Email</label>
                <input placeholder="johndoe@hello.com" id="email" name="email" />
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input placeholder="******" type="password" name="password" />
            </div>

            <a href="/register">Register</a>
            <button class="button">Log In</button>
        </form>
    </div>
@endsection
