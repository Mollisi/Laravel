<?php


use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlaaslaaiController;
use App\Http\Controllers\SiloController;
use App\Http\Controllers\LidnommerController;
use App\Http\Controllers\transactionController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/application', function () {
    return view('application');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/approve', function () {
    return view('approve');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
// Route::get('/invoices', [InvoiceController::class, 'index']);

Route::get('/AddInvoice', [InvoiceController::class, 'create_invoice']);

// Route::get('/invoices', [transactionController::class, Cars()]);
//test
Route::get('/Plaaslaai', [PlaaslaaiController::class, 'Farmloads']);

Route::get('/Silo', [SiloController::class, 'Silo']);
Route::get('/Lidnommer', [LidnommerController::class, 'Lidnommer']);

Route::get('/purchase-create', [transactionController::class, 'create']);
Route::post('/purchase-store', [transactionController::class, 'store']);
// Route::get('/Plaaslaai', function() {
//     return view('list users');
// });

// post Routes

Route::post('/profile', function ($request) {
    dd($request->all());
});

Route::post('/invoices', function ($request) {
    dd($request->all());
});

class Database
{
    public function fetchUsers() {}
}
class Users
{

    public Database $database;
    public function __construct()
    {
        $this->database = new Database();
    }
    public function getUsers()
    {
        $this->database->fetchUsers();
    }
}
