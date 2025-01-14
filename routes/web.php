<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::prefix('transactions')->name('transactions.')->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->name('index');
    Route::get('/create', [TransactionController::class, 'create'])->name('create');
    Route::get('/{transactionId}', [TransactionController::class, 'show'])->name('show');
    Route::post('/', [TransactionController::class, 'store'])->name('store');
});

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

