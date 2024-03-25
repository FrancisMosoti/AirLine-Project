<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plane;
use App\Models\Bookings;
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
    public function help()
    {
        return view('help');
    }

    public function searchFlight(){
        return view('search-flight');
    }
    public function searchTicket(Request $request){
        $ticket = $request->input('ticket');

        $my_ticket = Bookings::where('TicketNumber', $ticket)->first();
        // 
                // Initialize TCPDF
                $pdf = new \TCPDF();
                // $pdf->SetPageSize('A5'); // Set page size to A4
        
        
                // Set document information
                $pdf->SetCreator('Elvis Havi');
                $pdf->SetAuthor('Guya Havi');
                $pdf->SetTitle('Ticket');
        
                // Add a page
                $pdf->AddPage();
        
                // Set some content to the PDF (replace this with your HTML/CSS or dynamic content generation)
                $html = view('download_ticket',['data' => $my_ticket])->render(); // Assuming you have a blade file 'ticket.blade.php' in your views directory.
        
                // Write the HTML content
                $pdf->writeHTML($html, true, false, true, false, '');
                
        
                // Output the PDF as a response
                return $pdf->Output('ticket.pdf', 'I');

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
        $time = $request->input('time');
        $date = $request->input('date');

        $data = array(
            'destination' => $destination, 
            'depart'   => $depart, 
            'plane' => $plane,
            'price' => $price,
            'date' => $date,
            'time' => $time,
            
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