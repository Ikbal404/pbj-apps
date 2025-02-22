<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BrandaController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BrandaController::class,'index']);

// berita
Route::get('/berita',[BeritaController::class,'index']);
Route::get('/berita-detail',[BeritaController::class,'detail']);

// Profil
// dasar dan tupoksi
Route::get('/dasar-dan-tupoksi',[ProfilController::class,'dasarDanTupoksi']);
