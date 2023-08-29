@extends('layouts.base')

@section('content')
    <nav>
        <img src="/logo.png" alt="Logo" />

        <div class="right">
            @if (auth()->user()->role == 'dineEasyAdmin' && auth()->user()->restaurant_id != null)
                <form method="POST" action="/jump-back">
                    @csrf
                    <button class="button-secondary">
                        <img src="/building-icon.png" alt="Building Icon" />
                    </button>
                </form>
            @endif

            @if (!Request::is('/'))
                <a href="/" class="button-secondary">
                    <img src="/chevron-right.png" alt="Chevron Right" />
                    Back to Dashboard
                </a>
            @endif

            <form method="POST" action="/logout">
                @csrf
                <button class="button">Log Out</button>
            </form>
        </div>
    </nav>
    @yield('dashboard')
@endsection
