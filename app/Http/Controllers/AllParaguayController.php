<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllParaguayController extends Controller
{
    public function index()
    {
        return view('supplier.paraguay_import_all');
    }
}
