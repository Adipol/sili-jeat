<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ConsultGuatemalaController extends Controller
{
    public function index()
    {
        return view('supplier.consults.index-guatemala');
    }

    public function downloadPDFNull()
    {
        $date = Carbon::now();
        $valor1p = session('value1p');
        $valor2p = session('value2p');

        $pdf = PDF::loadView('client.pdf-null-guatemala', compact('date', 'valor1p', 'valor2p'));

        return $pdf->download('AMLC_Pep_null_guatemala.pdf');
    }
}
