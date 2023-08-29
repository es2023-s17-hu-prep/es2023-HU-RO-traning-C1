@extends('layout.admin')

@section('content')
    {{-- Restaurant select --}}
    <div class="flex flex-col gap-4 items-center">
        <h1 class="text-2xl font-bold">Select a restaurant</h1>
        @foreach($restaurants as $restaurant)
            <a class="p-4 bg-white w-96 rounded text-center" href="/restaurant_select/{{$restaurant->id}}">{{$restaurant->name}}</a>
        @endforeach
    </div>
@endsection
