<?php

use App\Http\Controllers\LeverancierController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leverancier', [LeverancierController::class, 'index'])->name('leverancier.index');
Route::post('/leverancier', [LeverancierController::class, 'index'])->name('leverancier.index.zoeknaam');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
