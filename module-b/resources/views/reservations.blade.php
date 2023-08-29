@extends('layout.admin')

@section('content')
    {{-- Reservation list --}}

    <h1 class="text-3xl font-bold mb-6">Reservations</h1>

    @if(session('message'))
        <div class="text-green-600 bg-green-300 border-green-600 rounded-md p-4 mb-4">
            {{session('message')}}
        </div>
    @endif

    <table class="border mb-4">
        <thead>
        <tr>
            <th class="p-4">
                Date
            </th>
            <th class="p-4">Time</th>
            <th class="p-4">State</th>
            <th class="p-4">Size</th>
            <th class="p-4">Contact Name</th>
            <th class="p-4"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            {{-- Reservation row --}}
            <tr>
                <td class="p-4">
                    {{$reservation->date}}
                </td>
                <td class="p-4">{{$reservation->time}}</td>
                <td class="p-4">
                    {{-- Reservation status --}}
                    <span
                        class="px-2 py-1 font-bold text-sm rounded @if($reservation->state == 'pending') text-orange-700 bg-orange-300 @elseif($reservation->state == 'confirmed') text-green-700 bg-green-300 @else text-red-700 bg-red-300 @endif">
                        {{$reservation->state}}
                    </span>
                </td>
                <td class="p-4">{{$reservation->party_size}}</td>
                <td class="p-4">{{$reservation->user_name}}</td>
                <td class="p-4 flex flex-row gap-2">
                    {{-- Cancel reservation --}}
                    <form action="/reservations/{{$reservation->id}}/cancel" method="POST">
                        @csrf
                        <button type="submit"
                                class="p-2 block rounded text-gray-900 bg-gray-300 hover:bg-gray-400 font-bold">
                            Cancel
                        </button>
                    </form>

                    {{-- Confirm reservation --}}
                    <form action="/reservations/{{$reservation->id}}/confirm" method="POST">
                        @csrf
                        <button type="submit"
                                class="p-2 block rounded text-gray-900 bg-gray-300 hover:bg-gray-400 font-bold">
                            Confirm
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
