<?php

use App\Http\Controllers\StemwijzerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StemwijzerController::class, 'index'])->name('stemwijzer.index');
Route::post('/', [StemwijzerController::class, 'store'])->name('stemwijzer.store');
Route::get('/result', [StemwijzerController::class, 'match'])->name('stemwijzer.match');
