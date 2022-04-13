<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class AllegadoPdfSalvadorController extends Controller
{
    public function downloadPDF($id)
    {
        $pep = DB::table('control_salvador')->where('id_pep', $id)->first();
        $all = DB::table('control_salvador')->where('id_pep', $id)
            ->where('type_pep', 'ALL')->get();

        $date = Carbon::now();

        $pdf = PDF::loadView('client.allegado-pdf-salvador', compact('pep', 'date', 'all'));

        return $pdf->download('AMLC_Pep_allegado_salvador.pdf');
    }
}
