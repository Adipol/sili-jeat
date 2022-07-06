<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlParaguay;
use App\Models\ParaguayWhole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteParaguayController extends Controller
{
    public function index()
    {
        $complete = ParaguayWhole::all()->first();
        $lists = ControlParaguay::count('id');
        $codes = DB::table('control_paraguay')->select(DB::raw('count(*) as code_count, code'))->groupBy('code')->get();

        return view('client.complete-paraguay', compact('complete', 'lists', 'codes'));
    }
}
