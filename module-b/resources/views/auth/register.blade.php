@extends("layouts.app")
@section("content")
    <form class="form d-block" method="POST" action="{{ route("register.submit") }}">
        @csrf

        <div class="row">
            <label for="restaurant_name">Restaurant name</label>
            <input type="text" id="restaurant_name" name="restaurant_name">
            @error("restaurant_name")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>
        <div class="row">
            <label for="cusine">Cusine</label>
            <input type="text" id="cusine" name="cusine">
            @error("cusine")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>
        <div class="row">
            <label for="location">Location</label>
            <input type="text" id="location" name="location">
            @error("location")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <div class="row">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            @error("name")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>
        <div class="row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            @error("email")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            @error("password")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection