<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class ReservationController extends Controller
{
    public function changeConfirmStatus(Reservation $reservation)
    {
        // update the confirmed state
        $reservation->update(['confirmed' => $reservation->confirmed == 1 ? false : true]);
        return redirect('/reservations');
    }
}
