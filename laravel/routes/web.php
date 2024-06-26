<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;
use App\Models\House;

Route::post('/adduser', [UserController::class, 'register']);
Route::post('/loginuser', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/addhouse', [HouseController::class, 'addhouse']);
Route::get('/ownerhouse', [HouseController::class, 'showHouses']);

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/houses', function () {
    $houses = House::with('image')->get(); // Eager load the image relationship
    return view('houses', compact('houses'));
});

Route::get('/house1', function () {
    return view('house1');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/reservepage', function () {
    return view('reservepage');
});

