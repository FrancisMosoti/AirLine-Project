<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('wel');
// });
Route::get('/',[HomeController::class, 'index'])->name('home-url');
