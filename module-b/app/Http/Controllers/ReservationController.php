<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the reservations.
     */
    public function index()
    {
        $reservations = Auth::user()->restaurant->reservations;
        return view('reservations', compact('reservations'));
    }

    /**
     * Confirm a reservation
     * @param Reservation $reservation
     */
    public function confirm(Reservation $reservation)
    {
        // Authorization
        if($reservation->restaurant_id !== Auth::user()->restaurant_id){
            return redirect('dashboard');
        }

        $reservation->update(['state' => 'confirmed']);

        return redirect()->back()->with('message', 'Reservation confirmed');
    }

    /**
     * Cancel a reservation
     * @param Reservation $reservation
     */
    public function cancel(Reservation $reservation)
    {
        // Authorization
        if($reservation->restaurant_id !== Auth::user()->restaurant_id){
            return redirect('dashboard');
        }

        $reservation->update(['state' => 'cancelled']);

        return redirect()->back()->with('message', 'Reservation cancelled');
    }
}
