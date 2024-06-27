<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function addReservation( Request $request){
        $reservation = new Reservation();

        $reservation->userId = Session::get('loggedInUserId');
        $reservation->houseId = $request->houseId;
        $reservation->
    }
}
