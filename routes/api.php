<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\tTransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\QueryString;
use App\Http\Controllers\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('testing',[tTransactionController::class,'index'])->middleware(QueryString::class);
// Route::get('testing',[tTransactionController::class,'index']);
// Route::post('testing',[tTransactionController::class,'store']);
// Route::get('testing/{transaction}',[tTransactionController::class,'show']);
// Route::put('testing/{transaction}',[tTransactionController::class,'update']);
// Route::delete('testing/{transaction}',[tTransactionController::class,'destroy']);
Route::apiResource('testing', tTransactionController::class);
// Route::apiResource('users',UserController::class)->middleware('auth:sanctum');
Route::apiResource('users',UserController::class);
Route::get('me',[UserController::class,'me'])->middleware('auth:sanctum');
Route::get('me/invoice',[UserController::class,'myInvoice'])->middleware('auth:sanctum');
Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);