<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Auth;
use App\Models\User;


use App\Models\invoice;

class InvoiceController extends Controller
{
    //
    public function index(){
        $data = 'why?';
        $data = invoice::all();
        Auth::User();

        return view ('AddInvoice',['Create'=> $data]);
     }
     public function create_invoice(){
        invoice::create(['title'=> 'hobaneng']);
        return view ('AddInvoice',['Create'=> 'success']);
     }
}
