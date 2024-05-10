<?php

use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TinController::class, 'index']);
Route::get('/xemnhieu', [TinController::class, 'tinxemnhieu']);
Route::get('/tinmoi', [TinController::class, 'tinmoinhat']);
Route::get('/tintrongloai/{idLT}', [TinController::class, 'tintrongloai']);
Route::get('/chitiettin/{id}', [TinController::class, 'chitiettin']);
