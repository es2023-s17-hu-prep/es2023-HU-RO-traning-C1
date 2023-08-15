@extends('base')

{{--Base layour--}}

<header class="p-3 flex justify-between">
    <img src="/logo.png" alt="Logo"/>
    <div class="flex gap-2">
{{--        Restaurant select--}}
        @if(auth()->user()->isSuperAdmin() && request()->path() !== "select-restaurant")
            <a href="select-restaurant" class="bg-gray-200 rounded-md p-2">
                <img src="/building-icon.png" alt="Select restaurant" />
            </a>
        @endif
{{--        Back to dashboard--}}
        @if(request()->path() !== "home" && request()->path() !== "select-restaurant")
                <a href="home" class="bg-gray-200 rounded-md p-2 flex gap-2 items-center">
                    <img src="/chevron-double-left-icon.png" alt="Back icon" /> Back to dashboard
                </a>
        @endif
{{--        Logout--}}
        <a href="logout" class="bg-gray-200 rounded-md p-2 flex gap-2 items-center">
            <img src="/logout-icon.png" alt="Logout icon" /> Logout
        </a>
    </div>
</header>
<main class="p-2">
    @yield('content')
</main>
