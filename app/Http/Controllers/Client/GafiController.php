<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Control;
use Illuminate\Http\Request;

class GafiController extends Controller
{
    public function index()
    {
        $lists = Control::where('code', 'GAFI')->select('id', 'name_one', 'type_pep')->orderBy('name_one', 'asc')->get();
        return view('client.gafi', compact('lists'));
    }
}
