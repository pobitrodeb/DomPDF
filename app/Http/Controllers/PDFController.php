<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to pobitrodeb.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('welcome', $data);

        return $pdf->download('pobitrodeb.pdf');
    }
}
