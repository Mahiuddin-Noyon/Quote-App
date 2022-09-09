<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('quotes', [QuoteController::class, 'index'])->name('quotes')->middleware('auth');