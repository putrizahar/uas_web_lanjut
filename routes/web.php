<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PasienController::class, 'index'])->name('index');
Route::get('/tambah', [PasienController::class, 'create'])->name('create');
Route::post('/tambah', [PasienController::class, 'store'])->name('store');
Route::get('/edit/{pasien:id}', [PasienController::class, 'edit'])->name('edit');
Route::post('/edit/{pasien:id}', [PasienController::class, 'update'])->name('update');
Route::delete('/hapus/{pasien:id}', [PasienController::class, 'destroy'])->name('destroy');