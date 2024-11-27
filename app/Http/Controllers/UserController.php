<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
   public function index(){
    return response()->json([
        'data' => User::get(),
    ]);
   }
   public function me()
   {
    return response()->json([
        'data' => Auth::user(),
    ]);
   }
   public function myInvoice()
   {
    return response()->json([
        'data' => User::all(),
    ]);
   } 
}
