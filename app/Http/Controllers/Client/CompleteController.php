<?php

namespace App\Http\Controllers\Client;

use App\Exports\TransactionsExportAll;
use App\Http\Controllers\Controller;
use App\Models\Control;
use App\Models\Others;
use App\Models\whole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CompleteController extends Controller
{
    public function index()
    {
        $complete = whole::all()->first();
        $lists = Control::count('id');
        $codes = DB::table('controls')->select(DB::raw('count(*) as code_count, code'))->groupBy('code')->get();

        return view('client.complete', compact('complete', 'lists', 'codes'));
    }
}
