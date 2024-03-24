<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneratePdfController extends Controller
{
    public function pdfForm()
    {
        return view('pdf_form');
    }

    public function pdfDownload(){

       request()->validate([
        'email' => 'required|email',
        '' => 'required'
        ]);
     
         $data = 
         [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
         ];
       $pdf = PDF::loadView('pdf_download', $data);
  
       return $pdf->download('tutsmake.pdf');
    }
}