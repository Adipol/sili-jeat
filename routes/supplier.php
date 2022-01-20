<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\AllHondurasController;
use App\Http\Controllers\Supplier\OtherController;
use App\Http\Controllers\Supplier\ImportController;
use App\Http\Controllers\Supplier\ConsultController;
use App\Http\Controllers\Supplier\IncrementalController;
use App\Http\Controllers\Supplier\ImportHondurasController;
use App\Http\Controllers\Supplier\ConsultHondurasController;
use App\Http\Controllers\Supplier\IncrementalHondurasController;



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
