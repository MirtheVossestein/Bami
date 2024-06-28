<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ReservationController;
use App\Models\House;
use App\Models\Image;

Route::post('/completereservation', [ReservationController::class, 'addReservation'])->name('completereservation');
Route::post('/adduser', [UserController::class, 'register']);
Route::post('/loginuser', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/addhouse', [HouseController::class, 'addhouse']);
Route::get('/ownerhouse', [HouseController::class, 'showHouses']);
Route::get('/houses', [HouseController::class, 'displayHouses']);
Route::get('/house/{house}', function ($house) {
    // Fetch the house details based on the house parameter
    // Assuming $house is an ID, adjust the query if it's based on another attribute
    $houseDetails = House::where('id', $house)->first();

    // If no house is found, you might want to handle this case, e.g., show an error or redirect
    if (!$houseDetails) {
        return redirect('/'); // Adjust as necessary
    }

    // Pass the entire house details array to the view
    return view('house1')->with('house', $houseDetails);
    // Or alternatively
    // return view('house1', ['houseDetails' => $houseDetails]);
});

Route::get('/reserve/{house}', function ($house) {
    // Fetch the house details based on the house parameter
    // Assuming $house is an ID, adjust the query if it's based on another attribute
    $houseDetails = House::where('id', $house)->first();

    // If no house is found, you might want to handle this case, e.g., show an error or redirect
    if (!$houseDetails) {
        dd();
        return redirect('/'); // Adjust as necessary
    }

    // Pass the entire house details array to the view
    return view('reservepage')->with('house', $houseDetails);
    // Or alternatively
    // return view('house1', ['houseDetails' => $houseDetails]);
});

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/house1', function () {
    return view('house1');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/reservecompleted', function () {
    return view('reservecompleted');
});


