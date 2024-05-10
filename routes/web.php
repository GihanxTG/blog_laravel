<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/loaitin/{idLT}', [HomeController::class, 'loaitin']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);

Route::get('/xemnhieu', [TinController::class, 'tinxemnhieu']);
Route::get('/tinmoi', [TinController::class, 'tinmoinhat']);
Route::get('/tintrongloai/{idLT}', [TinController::class, 'tintrongloai']);
Route::get('/chitiettin/{id}', [TinController::class, 'chitiettin']);
