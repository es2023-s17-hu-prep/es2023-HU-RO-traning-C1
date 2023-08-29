@extends('layouts.dashboard')

@section('dashboard')
<main>
    <div class="restaurant-list">
        <h1>Reviews</h1>
        @foreach (auth()->user()->restaurant->reviews as $review)
            <div class="review">
                <div class="review-title">{{$review->user_name}} - {{$review->rating}}</div>
                <p>{{$review->comment}}</p>
            </div>
        @endforeach
    </div>
</main>
@endsection
