@extends('layout.base-layout')

@section('content')
    <div class="flex flex-col items-center justify-center h-full gap-2">
       <table>
           <thead>
                <tr>
                    <th class="p-2">
                        Name
                    </th>
                    <th class="p-2 w-96">
                        Price
                    </th>
                    <th class="p-2">
                        Actions
                    </th>
                </tr>
           </thead>
           <tbody>
                @foreach($menuItems as $item)
                    <tr class="@if($loop->even) bg-gray-100 @endif">
                        <td class="p-2">{{$item->name}}</td>
                        <td class="p-2 w-96">{{$item->price}}</td>
                        <td class="p-2">
                            <div class="flex gap-2">
                            <a href="menu/{{$item->id}}/edit" class="bg-gray-200 rounded-md p-2 w-12 h-12 flex justify-center items-center">
                                <img src="pencil-icon.png" alt="Edit" />
                            </a>
                            <form method="post" action="menu/{{$item->id}}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="bg-gray-200 rounded-md w-12 h-12 p-2 flex justify-center items-center">
                                    <img src="trash-icon.png" alt="Edit" />
                                </button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
           </tbody>
       </table>

        <a href="menu/create" class="bg-gray-200 rounded-md p-2 flex justify-center items-center">
            Add item
        </a>
    </div>
@endsection
