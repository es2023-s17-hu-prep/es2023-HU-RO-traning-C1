@extends('layout.base-layout')

@section('content')
    <div class="flex flex-col items-center h-full gap-2">
        @foreach($reviews as $review)
            <div class="border rounded-md p-2 w-96">
                <h2 class="text-2xl font-bold">{{$review->userName}} - {{$review->rating}}</h2>
                <p>{{$review->comment}}</p>

                <div class="flex gap-2">
                    <input class="bg-gray-100 p-2 rounded w-full" type="text" placeholder="Your response">
                    <button class="bg-gray-200 rounded-md p-2 flex gap-2 items-center">
                        Send
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
