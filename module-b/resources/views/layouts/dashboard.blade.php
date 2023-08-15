@extends("layouts.app")
@section("content")
    <header class="d-flex gap-3">
        <img src="/images/logo@3x.png" alt="logo" class="me-auto">
        @if (Auth::user()->role)
            <a class="btn btn-secondary" href="{{ route("restaurants.index") }}">a</a>
        @endif
        <a href="{{ route("login.logout") }}" class="btn btn-secondary">Logout</a>
    </header>

    @yield("dashboard-content")
@endsection