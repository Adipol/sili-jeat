<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllNicaraguaController extends Controller
{
    public function index()
    {
        return view('supplier.nicaragua_import_all');
    }
}
