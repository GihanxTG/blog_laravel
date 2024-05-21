<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/loaitin/{idLT}', [HomeController::class, 'loaitin']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);