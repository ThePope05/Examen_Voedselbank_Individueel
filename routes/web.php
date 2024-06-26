<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gezinsallergieen', [AllergieController::class, 'index'])->name('allergies.index');
Route::get('/gezinsallergieen/{gezin}/details', [AllergieController::class, 'show'])->name('allergies.show');
Route::get('/gezinsallergieen/{gezin}/persoon/{persoon}/edit', [AllergieController::class, 'edit'])->name('allergies.edit');
Route::post('/gezinsallergieen/{gezin}/persoon/{persoon}', [AllergieController::class, 'update'])->name('allergies.update');
Route::get('/allergies/filter', [AllergieController::class, 'filter'])->name('allergies.filter');