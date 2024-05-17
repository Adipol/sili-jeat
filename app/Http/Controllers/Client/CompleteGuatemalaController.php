<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlGuatemala;
use App\Models\GuatemalaWhole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteGuatemalaController extends Controller
{
    public function index()
    {
        $complete = GuatemalaWhole::all()->first();
        $lists = ControlGuatemala::count('id');
        $codes = DB::table('control_guatemala')->select(DB::raw('count(*) as code_count, code'))->groupBy('code')->get();

        return view('client.complete-guatemala', compact('complete', 'lists', 'codes'));
    }
}
