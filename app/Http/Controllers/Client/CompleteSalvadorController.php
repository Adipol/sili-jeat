<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlSalvador;
use App\Models\SalvadorWhole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteSalvadorController extends Controller
{
    public function index()
    {
        $complete = SalvadorWhole::all()->first();
        $lists = ControlSalvador::count('id');
        $codes = DB::table('control_salvador')->select(DB::raw('count(*) as code_count, code'))->groupBy('code')->get();

        return view('client.complete-salvador', compact('complete', 'lists', 'codes'));
    }
}
