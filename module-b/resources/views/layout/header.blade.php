<header class="flex flex-row justify-between border-bottom w-full p-4 bg-white items-center">
    <img class="h-6" src="/assets/Logo.png" alt="Logo">

    <div class="flex gap-2">
        {{-- Restaurant select button --}}
        @if(auth()->user()->isSuperAdmin() && request()->path() !== 'restaurant_select')
            <a href="/restaurant_select"
               class="py-2 px-4 rounded text-gray-900 bg-gray-100 hover:bg-gray-200 font-bold">
                <img src="/assets/building-icon.png" alt="Icon">
            </a>
        @endif

        {{-- Back to dashboard button --}}
        @if(request()->path() !== 'dashboard' && request()->path() !== 'restaurant_select')
            <a href="/dashboard"
               class="py-2 px-4 rounded text-gray-700 flex gap-2 bg-gray-100 hover:bg-gray-200 font-bold ">
                <img src="/assets/chevron-double-left-icon.png" alt="Back icon"> Back to dashboard
            </a>
        @endif

        {{-- Logout button --}}
        <a href="/logout" class="py-2 px-4 rounded text-gray-700 flex gap-2 bg-gray-100 hover:bg-gray-200 font-bold">
            <img src="/assets/logout-icon.png" alt="Log out icon"> Log out
        </a>
    </div>
</header>
