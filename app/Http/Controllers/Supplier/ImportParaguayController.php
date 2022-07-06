<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsParaguayImport;
use App\Models\ControlParaguay;
use App\Models\Detail;
use App\Models\ExpenseParaguay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class ImportParaguayController extends Controller
{
    public function index()
    {
        $amount = ControlParaguay::count();
        $details = Detail::select('id', 'name')->orderBy('name', 'asc')->get();
        $expenses = ExpenseParaguay::orderBy('id', 'desc')->take(5)->get();

        return view('supplier.import_paraguay', compact('amount', 'details', 'expenses'));
    }

    public function importExcel(ImportStoreRequest $request)
    {
        $import = new ExpenseParaguay();
        $import->date = $request->get('date');
        $import->detail_id = $request->get('detail');
        $import->save();

        Excel::import(new TransactionsParaguayImport, $request->import_file);

        return Redirect::route('import.paraguay.index')->withSuccess('El archivo se cargo satisfactoriamente!');
    }
}
