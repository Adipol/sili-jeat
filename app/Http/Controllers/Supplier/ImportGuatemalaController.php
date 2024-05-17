<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportStoreRequest;
use App\Models\ControlGuatemala;
use App\Models\Detail;
use App\Models\ExpenseGuatemala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TransactionsGuatemalaImport;

class ImportGuatemalaController extends Controller
{
    public function index()
    {
        $amount = ControlGuatemala::count();
        $details = Detail::select('id', 'name')->orderBy('name', 'asc')->get();
        $expenses = ExpenseGuatemala::orderBy('id', 'desc')->take(5)->get();

        return view('supplier.import_guatemala', compact('amount', 'details', 'expenses'));
    }

    public function importExcel(ImportStoreRequest $request)
    {
        $import = new ExpenseGuatemala();
        $import->date = $request->get('date');
        $import->detail_id = $request->get('detail');
        $import->save();

        Excel::import(new TransactionsGuatemalaImport, $request->import_file);

        return Redirect::route('import.guatemala.index')->withSuccess('El archivo se cargo satisfactoriamente!');
    }
}
