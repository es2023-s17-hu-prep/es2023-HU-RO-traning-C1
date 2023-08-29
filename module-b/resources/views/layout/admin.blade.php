@extends('layout.base')

@section('body')
    {{-- Admin layout --}}
    <div class="flex flex-col min-h-screen bg-gray-100 gap-4">
        @include('layout.header')

        <main class="p-4">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="bg-black p-4 text-center text-gray-400 mt-auto">
            (c) 2023 - DineEase
        </footer>
    </div>
@endsection
