<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllParaguayController extends Controller
{
    public function show($id)
    {
        $pep = DB::table('control_paraguay')->where('id_pep', $id)->first();
        $all = DB::table('control_paraguay')->where('id_pep', $id)
            ->where('type_pep', 'ALL')->get();

        return view('client.all.show-paraguay', compact('pep', 'all'));
    }
}
