<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BrandaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BrandaController::class,'index']);
Route::get('/berita',[BeritaController::class,'index']);
Route::get('/berita-detail',[BeritaController::class,'detail']);
