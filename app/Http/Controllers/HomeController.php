<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;
use App\Models\Schedule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addPlane()
    {
        return view('add_flights');
    }

    public function regPlane(){
        return view('reg-plane');
    }
    public function profile(){
        return view('profile');
    }

    public function schedule(){
        return view('schedule', ['planes' => Plane::all()]);
    }

    public function storePlane(Request $request)
    {
        $request->validate([
            'plane' => 'required|string|max:255|min:3',
            'classA' => ['required','numeric'],
            'classB' => ['required','numeric'],
            'classC' => ['required','numeric'],
        ]);

        Plane::create([
            'Plane_name' => $request->input('plane'),
            'Class_A' => $request->input('classA'),
            'Class_B' => $request->input('classB'),
            'Class_C' => $request->input('classC'),
            
        ]);


        return redirect('/reg-plane')->with('success', 'Plane Registered Successful');
        
    }

    public function scheduleFlight(Request $request)
    {
        $request->validate([
            'plane' => 'required|string|max:255|min:3',
            'time' => 'required|date_format:H:i',
            'date' => 'required|date_format:Y-m-d|after:yesterday',
            'depart' => ['required','string'],
            'destination' => ['required','string'],
            'priceA' => ['required','numeric'],
            'priceB' => ['required','numeric'],
            'priceC' => ['required','numeric'],
        ]);

        Schedule::create([
            'plane' => $request->input('plane'),
            'time' => $request->input('time'),
            'date' => $request->input('date'),
            'destination' => $request->input('destination'),
            'depart' => $request->input('depart'),
            'priceA' => $request->input('priceA'),
            'priceB' => $request->input('priceB'),
            'priceC' => $request->input('priceC'),
            
        ]);


        return redirect('/flight-schedule')->with('success', 'Plane Scheduled Successfully');
        
    }
}