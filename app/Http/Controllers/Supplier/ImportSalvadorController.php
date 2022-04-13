<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsSalvadorImport;
use App\Models\ControlSalvador;
use App\Models\Detail;
use App\Models\ExpenseSalvador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class ImportSalvadorController extends Controller
{
    public function index()
    {
        $amount = ControlSalvador::count();
        $details = Detail::select('id', 'name')->orderBy('name', 'asc')->get();
        $expenses = ExpenseSalvador::orderBy('id', 'desc')->take(5)->get();

        return view('supplier.import_salvador', compact('amount', 'details', 'expenses'));
    }

    public function importExcel(ImportStoreRequest $request)
    {
        $import = new ExpenseSalvador();
        $import->date = $request->get('date');
        $import->detail_id = $request->get('detail');
        $import->save();

        Excel::import(new TransactionsSalvadorImport, $request->import_file);

        return Redirect::route('import.salvador.index')->withSuccess('El archivo se cargo satisfactoriamente!');
    }
}
