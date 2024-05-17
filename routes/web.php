<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\PdfController;
use App\Http\Controllers\Client\PdfNullController;
use App\Http\Controllers\Supplier\ConsultController;
use App\Http\Controllers\Client\AllegadoPdfController;
use App\Http\Controllers\Client\AllegadoPdfGuatemalaController;
use App\Http\Controllers\Client\PdfHondurasController;
use App\Http\Controllers\Client\PdfParaguayController;
use App\Http\Controllers\Client\PdfSalvadorController;
use App\Http\Controllers\Supplier\ConsultHondurasController;
use App\Http\Controllers\Supplier\ConsultParaguayController;
use App\Http\Controllers\Supplier\ConsultSalvadorController;
use App\Http\Controllers\Client\AllegadoPdfHondurasController;
use App\Http\Controllers\Client\AllegadoPdfParaguayController;
use App\Http\Controllers\Client\AllegadoPdfSalvadorController;
use App\Http\Controllers\Client\PdfGuatemalaController;
use App\Http\Controllers\Supplier\ConsultGuatemalaController;

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/livewire-charts', function () {
    return view('home');
});

Route::get('/download-pdf/{id}', [PdfController::class, 'downloadPDF'])->name('download-pdf');

Route::get('/download-honduras-pdf/{id}', [PdfHondurasController::class, 'downloadPDF'])->name('download-honduras-pdf');

Route::get('/download-salvador-pdf/{id}', [PdfSalvadorController::class, 'downloadPDF'])->name('download-salvador-pdf');

Route::get('/download-paraguay-pdf/{id}', [PdfParaguayController::class, 'downloadPDF'])->name('download-paraguay-pdf');

Route::get('/download-guatemala-pdf/{id}', [PdfGuatemalaController::class, 'downloadPDF'])->name('download-guatemala-pdf');


Route::get('/allegado-pdf/{id}', [AllegadoPdfController::class, 'downloadPDF'])->name('allegado-pdf');

Route::get('/allegado-pdf-honduras/{id}', [AllegadoPdfHondurasController::class, 'downloadPDF'])->name('allegado-pdf-honduras');

Route::get('/allegado-pdf-salvador/{id}', [AllegadoPdfSalvadorController::class, 'downloadPDF'])->name('allegado-pdf-salvador');

Route::get('/allegado-pdf-paraguay/{id}', [AllegadoPdfParaguayController::class, 'downloadPDF'])->name('allegado-pdf-paraguay');

Route::get('/allegado-pdf-guatemala/{id}', [AllegadoPdfGuatemalaController::class, 'downloadPDF'])->name('allegado-pdf-guatemala');


Route::get('/get-all-pep/{id}', [PdfController::class, 'getAllpep'])->name('get-all-pep');

Route::get('/download-pdf-null', [ConsultController::class, 'downloadPDFNull'])->name('download-pdf-null');

Route::get('/download-pdf-null-honduras', [ConsultHondurasController::class, 'downloadPDFNull'])->name('download-pdf-null-honduras');

Route::get('/download-pdf-null-salvador', [ConsultSalvadorController::class, 'downloadPDFNull'])->name('download-pdf-null-salvador');

Route::get('/download-pdf-null-paraguay', [ConsultParaguayController::class, 'downloadPDFNull'])->name('download-pdf-null-paraguay');

Route::get('/download-pdf-null-guatemala', [ConsultGuatemalaController::class, 'downloadPDFNull'])->name('download-pdf-null-guatemala');
