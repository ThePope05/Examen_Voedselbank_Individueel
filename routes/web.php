<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergieController;

Route::get('/', function () {
    return view('welcome');
});