<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactionController extends Controller
{

    public function create()
    {

return view('pages.dashboard')

}
    public function Cars(Request $request)
    {
        $invoice = Invoice::create([

        'transaction_number' => $request,
        'price' => $request, 
        ]);

        $transaction = Transaction::create([

            'transaction_number' => $request,
            'price' => $request, 
            ]);

            $price = Price::create([

                'price' => $request, 
                ]);    
     }
}
