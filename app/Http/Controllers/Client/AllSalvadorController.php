<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllSalvadorController extends Controller
{
    public function show($id)
    {
        $pep = DB::table('control_salvador')->where('id_pep', $id)->first();
        $all = DB::table('control_salvador')->where('id_pep', $id)
            ->where('type_pep', 'ALL')->get();

        return view('client.all.show-salvador', compact('pep', 'all'));
    }
}
