<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoices;

class InvoiceController extends Controller
{
    //
    public function index(){
        $data = 'why?';
        $data = Invoices::all();

        return view ('AddInvoice',['Create'=> $data]);
     }
     public function create_invoice(){
        invoices::create(['title'=> 'hobaneng']);
        return view ('AddInvoice',['Create'=> 'success']);
     }
}
