<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoorraadController;

Route::get('/', function () {
    return view('welcome');
});

// Voorraad overzicht
Route::get('/voorraad', [VoorraadController::class, 'index'])->name('voorraad.index');

// Filter voorraad op categorie
Route::get('/voorraad/filter', [VoorraadController::class, 'filterByCategorie'])->name('voorraad.filterByCategorie');

// Product details
Route::get('/voorraad/{id}/show', [VoorraadController::class, 'show'])->name('voorraad.show');
Route::get('/voorraad/{id}/edit', [VoorraadController::class, 'edit'])->name('voorraad.edit');
Route::patch('/voorraad/{id}/edit', [VoorraadController::class, 'update'])->name('voorraad.update');