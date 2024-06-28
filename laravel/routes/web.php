<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Models\House;
use App\Models\Image;
use PhpParser\Lexer\TokenEmulator\ReverseEmulator;

Route::post('/completereservation', [ReservationController::class, 'addReservation'])->name('completereservation');
Route::post('/deletehouse', [HouseController::class, 'deleteHouse'])->name('deletehouse');
Route::post('/addReview', [ReviewController::class, 'addReview'])->name('addreview');
Route::post('/', [ReservationController::class, 'addReservation'])->name('completereservation');
Route::post('/adduser', [UserController::class, 'register']);
Route::post('/loginuser', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/addhouse', [HouseController::class, 'addhouse']);
Route::get('/ownerhouse', [HouseController::class, 'showHouses']);
Route::get('/houses', [HouseController::class, 'displayHouses']);
Route::get('/house/{house}', function ($house) {
    
    
    $houseDetails = House::where('id', $house)->first();

    
    if (!$houseDetails) {
        return redirect('/'); 
    }

    
    return view('house1')->with('house', $houseDetails);
    
    
});

Route::get('/reserve/{house}', function ($house) {
    
    
    $houseDetails = House::where('id', $house)->first();

    
    if (!$houseDetails) {
        dd();
        return redirect('/'); 
    }

    
    return view('reservepage')->with('house', $houseDetails);
    
    
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

Route::get('/contactpage', function () {
    return view('contactpage');
});

Route::get('/myreservations', function () {
    return view('myreservations');
});

Route::get('/profile', function () {
    return view('profile');
});







