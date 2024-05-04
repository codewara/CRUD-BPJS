<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PasienController;


Route::get('/', [PagesController::class,'home']);
Route::resource('pasien', PasienController::class);