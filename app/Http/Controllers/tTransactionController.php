<?php

namespace App\Http\Controllers;

use App\Models\testing;
use Illuminate\Http\Request;
use App\Http\Middleware\QueryString;
use App\Models\invoice;


class tTransactionController extends Controller
{
    // crud
    public function index()
    {
        // dd('Reached Index');

        $transactions = invoice::all();
        return response()->json(['name' => $transactions]);
    }


    public function store(Request $request)
    {
        $data = ($request->all());

        invoice::create([
            'amount' => $data['amount'],
            'transaction_number' => $data['transaction_number'],

        ]);
        return response()->json(['message' => 'record successfully created']);
    }

    public function show(invoice $transaction)
    {
        // $data = testing::find($data['id']);
        dd($transaction);
    }

    public function update(Request $request, invoice $transaction)
    {
        $data = $request->all();
       $transaction->update($data);


        // testing::where('id', $transaction->id)->update([
        //     'amount' => $data['amount'],
        //     'tranasction_number' => $data['transaction_number'],
    
        return response()->json(['message' => 'record successfully updated']);
    }

    public function destroy(invoice $transaction)
    {
        $transaction->delete();
        return response()->json(['message'=> 'record successfully deleted'
    ]);
}
}