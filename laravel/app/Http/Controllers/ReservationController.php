<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{   
    public function addReservation(Request $request){
        $request->validate([
            'start' => 'required|date|after:tomorrow',
        ]);

        $reservation = new Reservation();

        $reservation->userId = Session::get('loggedInUserId');
        $reservation->houseId = $request['houseId'];
        $reservation->startday = $request['start'];
        $reservation->endDay = $request['end'];

        $reservation->save();

        return view('reservecompleted');
    }
}
