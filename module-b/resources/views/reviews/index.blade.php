@extends('layouts.base')

@section('content')


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

<main class="reviews">
    @foreach (auth()->user()->restaurant->reviews as $review)
        <div class="review">
            <h1>{{$review->user_name}} - {{$review->rating}}</h1>
            <p>{{$review->comment}}</p>

            <form class="auth-line" method="POST">
                @csrf
                <input placeholder="Reply" />
                <button class="button">Send</button>
            </form>
            
            <div class="divider"></div>
            <div>You haven't replied yet.</div>
        </div>
    @endforeach
</main>
@endsection