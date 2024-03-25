<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class TicketController extends Controller
{
    public function generateTicket(Request $request)
    {
        // Initialize TCPDF
        $pdf = new \TCPDF();
        // $pdf->SetPageSize('A5'); // Set page size to A4


        // Set document information
        $pdf->SetCreator('Elvis Havi');
        $pdf->SetAuthor('Guya Havi');
        $pdf->SetTitle('Ticket');

        // Add a page
        $pdf->AddPage();
        function generateRandomMixed() {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $mixed = '';
            for ($i = 0; $i < 3; $i++) {
                $mixed .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $mixed;
        }

        // validation email,phone,name
        
        // user credential on booking
        $plane = $request->input('plane');
        $destination = $request->input('destination');
        $ticket = $plane."-".generateRandomMixed();
        $depart = $request->input('depart');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $price = $request->input('price');
        $time = $request->input('time');
        $date = $request->input('date');

        

        $credential = array(
            $plane,
            $date,
            $time,
        );
        // dd($credential);

        if(($credential[0] == null) && ($credential[1] == null)){
            return redirect('/')->with('error', 'Please search flight to book`');

        }

        $request->validate([
            'name' => 'required|string',
            'email' => ['required','string', 'email'],
            'phone' => ['required','numeric'],
        ]);

        Bookings::create([
            'Plane' => $plane,
            'TicketNumber' => $ticket,
            'Price' => $price,
            'Depart' => $depart,
            'Destination' => $destination,
            'Name' => $request->input('name'),
            'Email' => $request->input('email'),
            'Phone' => $request->input('phone'),
            'Date' => $date,
            'Time' => $time,
            
        ]);


        $data = array(
            'plane' => $ticket,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'destination' => $destination, 
            'depart'   => $depart, 
            'price' => $price,
            'date' => $date,
            'time' => $time,
            
           );


  

        // Set some content to the PDF (replace this with your HTML/CSS or dynamic content generation)
        $html = view('ticket',['data' => $data])->render(); // Assuming you have a blade file 'ticket.blade.php' in your views directory.

        // Write the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        

        // Output the PDF as a response
        return $pdf->Output('ticket.pdf', 'I');
    }

    public function storeTicket(){
        $request->validate([
            'plane' => 'required|string|max:255|min:3',
            'depart' => ['required','string'],
            'destination' => ['required','string'],
            'price' => ['required','numeric'],
        ]);

    }
}