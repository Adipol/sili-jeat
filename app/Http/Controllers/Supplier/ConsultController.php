<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultController extends Controller
{

    public function index()
    {
        return view('supplier.consults.index');
    }

    public function downloadPDFNull()
    {
        $date = Carbon::now();
        $valor1 = session('value1');
        $valor2 = session('value2');

        $pdf = PDF::loadView('client.pdf-null', compact('date', 'valor1', 'valor2'));

        return $pdf->download('AMLC_Pep_null.pdf');
    }
}
