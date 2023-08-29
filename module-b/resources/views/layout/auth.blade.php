@extends('layout.base')

@section('body')
    {{-- Authentication layout --}}
    <main class="flex flex-col gap-12 items-center justify-center h-screen bg-gray-100">
        <img class="w-32" src="/assets/Logo.png" alt="Logo">
        <div class="card max-w-sm w-full rounded shadow bg-white flex flex-col p-4 items-center gap-4">
            @yield('content')
        </div>
    </main>
@endsection
