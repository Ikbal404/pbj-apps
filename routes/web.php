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
// tujuan dan sasaran
Route::get('/tujuan-dan-sasaran',[ProfilController::class,'tujuanDanSasaran']);
// struktur organisasi
Route::get('/struktur-organisasi',[ProfilController::class,'strukturOrganisasi']);
// visi dan misi
Route::get('/visi-dan-misi',[ProfilController::class,'visiDanMisi']);
