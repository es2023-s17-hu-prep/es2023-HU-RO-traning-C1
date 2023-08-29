@extends('layout.admin')

@section('content')
    {{-- Restaurant menu --}}
    <h1 class="text-3xl font-bold mb-6">Manage menu</h1>

    {{-- Status message --}}
    @if(session('message'))
        <div class="text-green-600 bg-green-300 border-green-600 rounded-md p-4 mb-4">
            {{session('message')}}
        </div>
    @endif

    {{-- Menu item list --}}
    <table class="border mb-4">
        <thead>
            <tr>
                <th class="p-4">
                    Name
                </th>
                <th class="p-4">Price</th>
                <th class="p-4"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($menuItems as $item)
                <tr>
                    <td class="p-4">
                        {{$item->name}}
                    </td>
                    <td class="p-4">{{$item->price}}</td>
                    <td class="p-4 flex flex-row gap-2">
                        {{-- Edit button --}}
                        <a href="/menu/{{$item->id}}/edit"
                           class="p-2 block rounded text-gray-900 bg-gray-300 hover:bg-gray-400 font-bold">
                            <img class="object-contain w-6 h-6" src="/assets/pencil-icon.png" alt="Edit">
                        </a>

                        {{-- Delete form --}}
                        <form action="/menu/{{$item->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                               class="p-2 block rounded text-gray-900 bg-gray-300 hover:bg-gray-400 font-bold">
                                <img class="object-contain w-6 h-6" src="/assets/trash-icon.png" alt="Edit">
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Create new button --}}
    <a class="py-2 px-4 w-max flex gap-2 rounded text-gray-900 bg-gray-300 hover:bg-gray-400 font-bold" href="/menu/create">
        <img src="/assets/plus-circle-icon.png" alt="Icon" >
        Create new menu item
    </a>
@endsection
