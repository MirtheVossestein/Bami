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

Route::get('/houses', function () {
    return view('houses');
})->name('houses');

Route::get('/login', [ProfileController::class, 'showLoginForm'])->name('login');
Route::post('/login', [ProfileController::class, 'login']);
Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
Route::post('/register', 'App\Http\Controllers\Auth\ProfileController@register')->name('register');
Route::get('/index', function () {
    return view('index');
})->middleware('auth')->name('index');

Route::get('/house1', function () {
    return view('house1');
})->name('house1');

Route::get('/register', function () {
    return view('register');
})->name('register');

