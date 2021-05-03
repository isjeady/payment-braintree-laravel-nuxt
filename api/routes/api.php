<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Orders\OrderController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('orders/generate',[OrderController::class, 'generate']);
Route::post('orders/make/payment',[OrderController::class, 'makePayment']);


