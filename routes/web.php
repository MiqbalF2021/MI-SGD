<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kurikulum', [HomeController::class, 'kurikulum'])->name('kurikulum');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi-misi');
Route::get('/ekstra', [HomeController::class, 'extra'])->name('ekstra');

