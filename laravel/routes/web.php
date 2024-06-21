<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;

Route::post('/adduser', [UserController::class, 'register']);
Route::post('/loginuser', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/addhouse', [HouseController::class, 'addhouse']);

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ownerhouse', function () {
    return view('ownerhouse');
});

Route::get('/houses', function () {
    return view('houses');
});

Route::get('/house1', function () {
    return view('house1');
});

Route::get('/register', function () {
    return view('register');
});
