<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/user', function () {
    return view('login');
});

Route::get('/login', [ProfileController::class, 'showLoginForm'])->name('login');
Route::post('/login', [ProfileController::class, 'login']);
Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');

Route::get('/index', function () {
    return view('index');
})->middleware('auth')->name('index');