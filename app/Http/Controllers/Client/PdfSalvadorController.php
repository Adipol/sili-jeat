<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlSalvador;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PdfSalvadorController extends Controller
{
    public function downloadPDF($id)
    {
        $pep = ControlSalvador::where('id_register', $id)->first();
        $date = Carbon::now();

        $pdf = PDF::loadView('client.salvador-pdf', compact('pep', 'date'));

        return $pdf->download('AMLC_Pep_s.pdf');
    }

    public function getAllpep($id)
    {
        $pep = ControlSalvador::where('id_register', $id)->first();
        $date = Carbon::now();

        return view('client.pdf', compact('pep', 'date'));
    }
}
