@extends('layouts.dashboard')

@section('dashboard')
<main>
    <h1>Menu Items</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach (auth()->user()->restaurant->menus as $menu)
            <tr>
                <td>{{$menu->dish_name}}</td>
                <td>{{$menu->price}} EUR</td>
                <td>
                    <a class="button-secondary" href="/menu/{{$menu->id}}">Edit</a>

                    <form method="POST" action="/menu/{{$menu->id}}">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a class="button-secondary" href="/menu/new">Add new item</a>
</main>
@endsection
