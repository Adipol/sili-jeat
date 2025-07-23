<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlNicaragua;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PdfNicaraguaController extends Controller
{
    public function downloadPDF($id)
    {
        $pep = ControlNicaragua::where('id_register', $id)->first();
        $date = Carbon::now();

        $pdf = PDF::loadView('client.nicaragua-pdf', compact('pep', 'date'));

        return $pdf->download('AMLC_Pep_p.pdf');
    }

    public function getAllpep($id)
    {
        $pep = ControlNicaragua::where('id_register', $id)->first();
        $date = Carbon::now();

        return view('client.pdf', compact('pep', 'date'));
    }
}
