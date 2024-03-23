<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function flight(){
        return view('flights');
    }

    public function changeFlight(){
        return view('change_bookings');
    }

    public function viewFlight(){
        return view('view_bookings');
    }


}