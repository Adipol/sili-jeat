<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncrementalSalvadorController extends Controller
{
    public function index()
    {
        return view('supplier.incremental-salvador');
    }
}
