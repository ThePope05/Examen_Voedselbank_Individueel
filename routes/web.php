<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoorraadController;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Voorraad overzicht
Route::get('/voorraad', [VoorraadController::class, 'index'])->name('voorraad.index');

// Filter voorraad op categorie
Route::get('/voorraad/filter', [VoorraadController::class, 'filterByCategorie'])->name('voorraad.filterByCategorie');
