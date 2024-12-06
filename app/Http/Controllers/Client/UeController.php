<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Control;
use Illuminate\Http\Request;

class UeController extends Controller
{
    public function index()
    {
        $lists = Control::where('code', 'PF-UE')->select('id', 'name_one', 'type_pep')->orderBy('name_one', 'asc')->get();
        return view('client.ue', compact('lists'));
    }
}
