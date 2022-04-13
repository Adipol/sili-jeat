<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllSalvadorController extends Controller
{
    public function index()
    {
        return view('supplier.salvador_import_all');
    }
}
