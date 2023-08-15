@extends('layout.base-layout')

@section('content')
    <div class="flex flex-col items-center gap-2">
        @foreach($restaurants as $restaurant)
            <a class="bg-gray-300 rounded-md px-3 py-2 w-96 text-center" href="select-restaurant/{{$restaurant->id}}">{{$restaurant->name}}</a>
        @endforeach
    </div>
@endsection
