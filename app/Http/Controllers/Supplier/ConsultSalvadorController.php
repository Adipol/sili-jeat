<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultSalvadorController extends Controller
{
    public function index()
    {
        return view('supplier.consults.index-salvador');
    }

    public function downloadPDFNull()
    {
        $date = Carbon::now();
        $valor1s = session('value1s');
        $valor2s = session('value2s');

        $pdf = PDF::loadView('client.pdf-null-salvador', compact('date', 'valor1s', 'valor2s'));

        return $pdf->download('AMLC_Pep_null_salvador.pdf');
    }
}
