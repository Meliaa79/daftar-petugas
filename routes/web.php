<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;



Route::get('/petugas', [PetugasController::class, 'index']);

Route::post('/petugas/store', [PetugasController::class, 'store'])->name('petugas.store');
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
