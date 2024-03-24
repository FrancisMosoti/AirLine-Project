<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function generateTicket()
    {
        // Initialize TCPDF
        $pdf = new \TCPDF();

        // Set document information
        $pdf->SetCreator('Elvis Havi');
        $pdf->SetAuthor('Guya Havi');
        $pdf->SetTitle('Ticket');

        // Add a page
        $pdf->AddPage();

        // Set some content to the PDF (replace this with your HTML/CSS or dynamic content generation)
        $html = view('ticket')->render(); // Assuming you have a blade file 'ticket.blade.php' in your views directory.

        // Write the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        

        // Output the PDF as a response
        return $pdf->Output('ticket.pdf', 'I');
    }
}
