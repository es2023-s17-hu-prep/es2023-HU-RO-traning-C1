@extends('layouts.dashboard')

@section('dashboard')
<main>
    <h1>Reservations</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Date & Time</th>
            <th>Size</th>
            <th>Actions</th>
        </tr>
        @foreach (auth()->user()->restaurant->reservations as $reservation)
            <tr>
                <td>{{$reservation->user_name}}</td>
                <td>{{$reservation->date}} {{$reservation->time}}</td>
                <td>{{$reservation->party_size}}</td>
                <td>
                    <form method="POST" action="/reservations/{{$reservation->id}}">
                        @csrf
                        @method('patch')

                        @if ($reservation->confirmed)
                            <button>Cancel</button>
                        @else
                            <button>Confirm</button>
                        @endif
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</main>
@endsection
