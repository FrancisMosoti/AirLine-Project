<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-plane', [App\Http\Controllers\HomeController::class, 'addPlane'])->name('add-plane');
Route::get('/reg-plane', [App\Http\Controllers\HomeController::class, 'regPlane'])->name('reg-plane');
Route::post('/reg-plane', [App\Http\Controllers\HomeController::class, 'storePlane'])->name('reg-plane');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');


Route::get('/flights', [App\Http\Controllers\BookController::class, 'flight'])->name('flights');
Route::get('/change-booking', [App\Http\Controllers\BookController::class, 'changeFlight'])->name('change-booking');
Route::get('/view-booking', [App\Http\Controllers\BookController::class, 'viewFlight'])->name('view-booking');