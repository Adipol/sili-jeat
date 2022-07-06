<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultParaguayController extends Controller
{
    public function index()
    {
        return view('supplier.consults.index-paraguay');
    }

    public function downloadPDFNull()
    {
        $date = Carbon::now();
        $valor1p = session('value1p');
        $valor2p = session('value2p');

        $pdf = PDF::loadView('client.pdf-null-paraguay', compact('date', 'valor1p', 'valor2p'));

        return $pdf->download('AMLC_Pep_null_paraguay.pdf');
    }
}
