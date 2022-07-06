<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlParaguay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfParaguayController extends Controller
{
    public function downloadPDF($id)
    {
        $pep = ControlParaguay::where('id_register', $id)->first();
        $date = Carbon::now();

        $pdf = PDF::loadView('client.paraguay-pdf', compact('pep', 'date'));

        return $pdf->download('AMLC_Pep_p.pdf');
    }

    public function getAllpep($id)
    {
        $pep = ControlParaguay::where('id_register', $id)->first();
        $date = Carbon::now();

        return view('client.pdf', compact('pep', 'date'));
    }
}
