@extends("layouts.dashboard")
@section("dashboard-content")
    @foreach ($reviews as $review)
        <div class="border rounded">
            <h2>{{$review->user_name}} - {{$review->rating}}</h2>
            <p>{{$review->comment}}</p>
        </div>
    @endforeach
@endsection