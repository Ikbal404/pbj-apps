<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BrandaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\UnitKerjaController;
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

// Unit Kerja
Route::get('/lpse',[UnitKerjaController::class,'lpse']);
Route::get('/pbj',[UnitKerjaController::class,'pbj']);

// publikasi
// Info Katalog
Route::get('/info-katalog',[PublikasiController::class,'infoKatalog']);
Route::get('/info-katalog-detail',[PublikasiController::class,'infoKatalogDetail']);
// proges sirup
Route::get('/proges-sirup',[PublikasiController::class,'progesSirup']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
