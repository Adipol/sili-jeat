<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlNicaragua;
use App\Models\NicaraguaWhole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteNicaraguaController extends Controller
{
    public function index()
    {
        $complete = NicaraguaWhole::all()->first();
        $lists = ControlNicaragua::count('id');
        $codes = DB::table('control_nicaragua')->select(DB::raw('count(*) as code_count, code'))->groupBy('code')->get();

        return view('client.complete-nicaragua', compact('complete', 'lists', 'codes'));
    }
}
