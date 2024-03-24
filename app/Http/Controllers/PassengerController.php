<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plane;
use App\Models\Schedule;
use Barryvdh\DomPDF\Facade\Pdf;
use TCPDF;
use Dompdf\Dompdf;

class PassengerController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function searchFlight(){
        return view('search-flight');
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