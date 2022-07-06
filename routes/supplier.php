<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\AllHondurasController;
use App\Http\Controllers\AllParaguayController;
use App\Http\Controllers\AllSalvadorController;
use App\Http\Controllers\Supplier\OtherController;
use App\Http\Controllers\Supplier\ImportController;
use App\Http\Controllers\Supplier\ConsultController;
use App\Http\Controllers\Supplier\IncrementalController;
use App\Http\Controllers\Supplier\ImportHondurasController;
use App\Http\Controllers\Supplier\ImportParaguayController;
use App\Http\Controllers\Supplier\ImportSalvadorController;
use App\Http\Controllers\Supplier\ConsultHondurasController;
use App\Http\Controllers\Supplier\ConsultParaguayController;
use App\Http\Controllers\Supplier\ConsultSalvadorController;
use App\Http\Controllers\Supplier\IncrementalHondurasController;
use App\Http\Controllers\Supplier\IncrementalParaguayController;
use App\Http\Controllers\Supplier\IncrementalSalvadorController;



Route::get('import', [ImportController::class, 'index'])->middleware('can:Importar bd')->name('import.index');

Route::post('importExcel', [ImportController::class, 'importExcel'])->name('importExcel');

Route::get('consults', [ConsultController::class, 'index'])->name('consults.index');

Route::get('incremental', [IncrementalController::class, 'index'])->middleware('can:Cargar incremental')->name('supplier.incremental.index');

Route::get('all', [AllController::class, 'index'])->middleware('can:Cargar completa')->name('supplier.all.index');

Route::get('other', [OtherController::class, 'index'])->middleware('can:Cargar otros')->name('supplier.other.index');


//Para Honduras

Route::get('import-honduras', [ImportHondurasController::class, 'index'])->middleware('can:Importar bd honduras')->name('import.honduras.index');

Route::post('importHondurasExcel', [ImportHondurasController::class, 'importExcel'])->name('importExcel.honduras');

Route::get('incremental-honduras', [IncrementalHondurasController::class, 'index'])->middleware('can:Cargar incremental honduras')->name('supplier.incremental.honduras.index');

Route::get('honduras-all', [AllHondurasController::class, 'index'])->middleware('can:Cargar completa honduras')->name('supplier.honduras.all.index');

Route::get('consults-honduras', [ConsultHondurasController::class, 'index'])->name('consults.honduras.index');

//Para El salvador

Route::get('import-salvador', [ImportSalvadorController::class, 'index'])->middleware('can:Importar bd el salvador')->name('import.salvador.index');

Route::post('importSalvadorExcel', [ImportSalvadorController::class, 'importExcel'])->name('importExcel.salvador');

Route::get('incremental-salvador', [IncrementalSalvadorController::class, 'index'])->middleware('can:Cargar incremental el salvador')->name('supplier.incremental.salvador.index');

Route::get('salvador-all', [AllSalvadorController::class, 'index'])->middleware('can:Cargar completa el salvador')->name('supplier.salvador.all.index');

Route::get('consults-salvador', [ConsultSalvadorController::class, 'index'])->name('consults.salvador.index');

//Para paraguay

Route::get('import-paraguay', [ImportParaguayController::class, 'index'])->middleware('can:Importar bd paraguay')->name('import.paraguay.index');

Route::post('importParaguayExcel', [ImportParaguayController::class, 'importExcel'])->name('importExcel.paraguay');

Route::get('incremental-paraguay', [IncrementalParaguayController::class, 'index'])->middleware('can:Cargar incremental paraguay')->name('supplier.incremental.paraguay.index');

Route::get('paraguay-all', [AllParaguayController::class, 'index'])->middleware('can:Cargar completa paraguay')->name('supplier.paraguay.all.index');

Route::get('consults-paraguay', [ConsultParaguayController::class, 'index'])->name('consults.paraguay.index');
