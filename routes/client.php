<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AllController;
use App\Http\Controllers\Client\CompleteController;
use App\Http\Controllers\Client\AllHondurasController;
use App\Http\Controllers\Client\AllParaguayController;
use App\Http\Controllers\Client\AllSalvadorController;
use App\Http\Controllers\Client\IncrementalController;
use App\Http\Controllers\Client\CompleteHondurasController;
use App\Http\Controllers\Client\CompleteParaguayController;
use App\Http\Controllers\Client\CompleteSalvadorController;
use App\Http\Controllers\Client\IncrementalHondurasController;
use App\Http\Controllers\Client\IncrementalParaguayController;
use App\Http\Controllers\Client\IncrementalSalvadorController;


//Route::get('client', [IncrementalController::class, 'index'])->name('client.index');

Route::get('incremental', [IncrementalController::class, 'index'])->middleware('can:Descargar incremental')->name('incremental.index');

Route::get('complete', [CompleteController::class, 'index'])->middleware('can:Descargar completa')->name('complete.index');

Route::get('all/{id}', [AllController::class, 'show'])->name('all.show');

//Honduras
Route::get('incremental-honduras', [IncrementalHondurasController::class, 'index'])->middleware('can:Descargar incremental honduras')->name('incremental.honduras.index');

Route::get('complete-honduras', [CompleteHondurasController::class, 'index'])->middleware('can:Descargar completa honduras')->name('complete.honduras.index');

Route::get('all-honduras/{id}', [AllHondurasController::class, 'show'])->name('all.honduras.show');

//El salvador
Route::get('incremental-salvador', [IncrementalSalvadorController::class, 'index'])->middleware('can:Descargar incremental el salvador')->name('incremental.salvador.index');

Route::get('complete-salvador', [CompleteSalvadorController::class, 'index'])->middleware('can:Descargar completa el salvador')->name('complete.salvador.index');

Route::get('all-salvador/{id}', [AllSalvadorController::class, 'show'])->name('all.salvador.show');

//Paraguay
Route::get('incremental-paraguay', [IncrementalParaguayController::class, 'index'])->middleware('can:Descargar incremental paraguay')->name('incremental.paraguay.index');

Route::get('complete-paraguay', [CompleteParaguayController::class, 'index'])->middleware('can:Descargar completa paraguay')->name('complete.paraguay.index');

Route::get('all-paraguay/{id}', [AllParaguayController::class, 'show'])->name('all.paraguay.show');
