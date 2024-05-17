<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllGuatemalaController extends Controller
{
    public function index()
    {
        return view('supplier.guatemala_import_all');
    }
}
