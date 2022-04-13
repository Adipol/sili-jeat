<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultSalvadorController extends Controller
{
    public function index()
    {
        return view('supplier.consults.index-salvador');
    }
}
