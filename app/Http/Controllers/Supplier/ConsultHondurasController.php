<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultHondurasController extends Controller
{
    public function index()
    {
        return view('supplier.consults.index-honduras');
    }

    public function downloadPDFNull()
    {
        $date = Carbon::now();
        $valor1h = session('value1h');
        $valor2h = session('value2h');

        $pdf = PDF::loadView('client.pdf-null-honduras', compact('date', 'valor1h', 'valor2h'));

        return $pdf->download('AMLC_Pep_null_honduras.pdf');
    }
}
