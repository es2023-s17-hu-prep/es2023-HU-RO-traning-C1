@extends('layouts.base')

@section('content')
    <div class="form-wrapper">
        <form class="form-container" method="POST" action="/register" enctype="multipart/form-data">
            @csrf

            <h1>Registration</h1>

            @error('regError')
                <div class="alert">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <label for="restaurantName">Restaurant name</label>
                <input value="{{old('restaurantName')}}" class="@error('restaurantName') error @enderror" id="restaurantName" name="restaurantName" />
                @error('restaurantName')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-line">
                <div class="input-group">
                    <label for="cuisine">Cuisine</label>
                    <input value="{{old('cuisine')}}" class="@error('cuisine') error @enderror" id="cuisine" name="cuisine" />
                    @error('cuisine')
                        <div class="input-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="location">Location</label>
                    <input value="{{old('location')}}" class="@error('location') error @enderror" id="location" name="location" />
                    @error('location')
                        <div class="input-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="input-group">
                <label for="logo">Upload a logo</label>
                <input type="file" class="@error('logo') error @enderror" id="logo" name="logo" />
                @error('logo')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="divider"></div>

            <div class="input-group">
                <label for="name">Name</label>
                <input value="{{old('name')}}" class="@error('name') error @enderror" id="name" name="name" />
                @error('name')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input value="{{old('email')}}" class="@error('email') error @enderror" id="email" name="email" />
                @error('email')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" class="@error('password') error @enderror" id="password" name="password" />
                @error('password')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <a href="/register">Log In</a>
            <button class="button">Create restaurant</button>
        </form>
    </div>
@endsection
