<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaypalController;
use App\Http\Controllers\TransactionController;


Route::get('/', function () {
    return view('welcome');
});

/* PayPal */
Route::post('paypal/payment', [PaypalController::class, 'payment'])->name('paypal');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');

/* Transactions */
Route::get('transactions' , [TransactionController::class , 'transactions']);
Route::get('transactionsData' , [TransactionController::class , 'transactionsData'])->name('data');
