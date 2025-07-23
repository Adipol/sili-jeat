<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsNicaraguaImport;
use App\Models\ControlNicaragua;
use App\Models\Detail;
use App\Models\ExpenseNicaragua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class ImportNicaraguaController extends Controller
{
    public function index()
    {
        $amount = ControlNicaragua::count();
        $details = Detail::select('id', 'name')->orderBy('name', 'asc')->get();
        $expenses = ExpenseNicaragua::orderBy('id', 'desc')->take(5)->get();

        return view('supplier.import_nicaragua', compact('amount', 'details', 'expenses'));
    }

    public function importExcel(ImportStoreRequest $request)
    {
        $import = new ExpenseNicaragua();
        $import->date = $request->get('date');
        $import->detail_id = $request->get('detail');
        $import->save();

        Excel::import(new TransactionsNicaraguaImport, $request->import_file);

        return Redirect::route('import.nicaragua.index')->withSuccess('El archivo se cargo satisfactoriamente!');
    }
}
