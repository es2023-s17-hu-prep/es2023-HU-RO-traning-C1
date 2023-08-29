@extends('layout.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Manage reviews</h1>
    <div class="flex flex-col gap-4">

        {{-- List reviews --}}
        @foreach($reviews as $review)
            <div class="shadow-md rounded-lg border p-4 flex flex-col gap-4 bg-white w-full max-w-md">
                {{-- Review title --}}
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl font-bold">{{$review->reviewer}} - {{$review->rating}}</h2>
                    <p>{{$review->comment}}</p>
                </div>

                {{-- Reply form --}}
                <div class="flex gap-2 mt-2">
                    <input type="text" placeholder="Reply" class="px-4 border rounded w-full">
                    <button
                       class="py-2 px-4 rounded text-gray-700 flex gap-2 bg-gray-100 hover:bg-gray-200 font-bold flex-shrink-0">
                        <img src="/assets/fire-icon.png" alt="Send reply">
                        Reply
                    </button>
                </div>
                <hr>
                <p class="text-center italic">You did not reply yet</p>
            </div>
        @endforeach

        {{-- Empty state --}}
        @if(count($reviews) == 0)
                <p class="text-center italic">No reviews yet</p>
        @endif
    </div>
@endsection
