<?php


use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlaaslaaiController;
use App\Http\Controllers\SiloController;
use App\Http\Controllers\LidnommerController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function() {
    return view('list users');
});

Route:: get('/invoices',[InvoiceController::class,'index']);

Route:: get('/AddInvoice',[InvoiceController::class,'create_invoice']);

//test
Route:: get('/Plaaslaai',[PlaaslaaiController::class,'Farmloads']);

Route:: get('/Silo',[SiloController::class,'Silo']);
Route:: get('/Lidnommer',[LidnommerController::class,'Lidnommer']);

// Route::get('/Plaaslaai', function() {
//     return view('list users');
// });