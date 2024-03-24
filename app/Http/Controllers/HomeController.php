<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plane;
use App\Models\Schedule;
use Barryvdh\DomPDF\Facade\Pdf;
use TCPDF;
use Dompdf\Dompdf;

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
        return view('index');
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

    public function manage(){
        return view('manage-planes', ['planes' => Plane::all()]);
    }
    public function manageFlight(){
        return view('manage-flights', ['schedules' => Schedule::all()]);
    }

    public function searchFlight(){
        return view('search-flight');
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

    public function flightSearch(Request $request)
    {
        $request->validate([
            'date' => 'required|date_format:Y-m-d|after:yesterday',
            'depart' => ['required','string'],
            'destination' => ['required','string'],
        ]);


        $date  = $request->input('date');
        $destination = $request->input('destination');
        $depart = $request->input('depart');

        $departures = Schedule::where('destination', $destination)
                            ->where('depart', $depart)
                            ->where('date', $date)
                            ->get();

        return view('available-flights', compact('departures'));
        
    }

    public function destroy($id)
    {
        // Find the item
        $item = Plane::find($id);
        
        if ($item) {
            // Delete the item
            $item->delete();
            return redirect()->back()->with('success', 'Plane deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Plane not found.');
        }
    }


    public function destroyFlight($id)
    {
        // Find the item
        $item = Schedule::find($id);
        
        if ($item) {
            // Delete the item
            $item->delete();
            return redirect()->back()->with('success', 'Plane Schedule deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Schedule not found.');
        }

    }
    public function book_Enq(Request $request)
    {
        // $date  = $request->input('date');
        $destination = $request->input('destination');
        $depart = $request->input('depart');
        $plane = $request->input('name');
        $price = $request->input('price');

        $data = array(
            'destination' => $destination, 
            'depart'   => $depart, 
            'plane' => $plane,
            'price' => $price
            
           );
           



           return view('book', ['data' => $data]);

    }

    public function ticket(){
// Create a new Dompdf instance
$dompdf = new Dompdf();

// HTML content for the ticket
$html = '

';

// Load HTML content into Dompdf
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A5', 'portrait');

// Render PDF (optional: you can also save to a file instead of outputting to the browser)
$dompdf->render();

// Output the generated PDF to the browser
$dompdf->stream('flight_ticket.pdf', ['Attachment' => false]);
        
    }

    public function pdf(){
        return view('pdf');
        
    }

    
}