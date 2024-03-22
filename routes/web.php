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

Route::get('/flight-schedule', [App\Http\Controllers\HomeController::class, 'schedule'])->name('schedule');
Route::post('/flight-schedule', [App\Http\Controllers\HomeController::class, 'scheduleFlight'])->name('schedule');

Route::get('/manage-planes', [App\Http\Controllers\HomeController::class, 'manage'])->name('manage');
Route::delete('/planes/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('plane.destroy');

Route::get('/manage-flight', [App\Http\Controllers\HomeController::class, 'manageFlight'])->name('manage.flight');
Route::delete('/flight/{id}', [App\Http\Controllers\HomeController::class, 'destroyFlight'])->name('flight.destroy');

Route::get('/search-flight', [App\Http\Controllers\HomeController::class, 'searchFlight'])->name('flight.search');
Route::post('/search-flight', [App\Http\Controllers\HomeController::class, 'flightSearch'])->name('flight.search');

Route::get('/flights', [App\Http\Controllers\BookController::class, 'flight'])->name('flights');

Route::get('/change-booking', [App\Http\Controllers\BookController::class, 'changeFlight'])->name('change-booking');
Route::get('/view-booking', [App\Http\Controllers\BookController::class, 'viewFlight'])->name('view-booking');