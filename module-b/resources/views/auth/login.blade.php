@extends("layouts.app")
@section("content")
    <form class="form d-block" method="POST" action="{{ route("login.submit") }}">
        @csrf
        <div class="row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route("register") }}" class="btn btn-primary">Register</button>
    </form>
@endsection