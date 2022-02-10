<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlHonduras;
use App\Models\HondurasWhole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteHondurasController extends Controller
{
    public function index()
    {
        $complete = HondurasWhole::all()->first();
        $lists = ControlHonduras::count('id');
        $codes = DB::table('control_honduras')->select(DB::raw('count(*) as code_count, code'))->groupBy('code')->get();

        return view('client.complete-honduras', compact('complete', 'lists', 'codes'));
    }
}
