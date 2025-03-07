<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BrandaController;
use App\Http\Controllers\DashboardBerandaControllerController;
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
    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Beranda
    // hero
    Route::get('/dashboard-hero',[DashboardBerandaControllerController::class, 'hero'])->name('hero');
    Route::post('/dashboard-hero',[DashboardBerandaControllerController::class, 'heroStore'])->name('hero.store');
    Route::put('/dashboard-hero/{id}',[DashboardBerandaControllerController::class, 'heroUpdate'])->name('hero.update');
    // informasi
    Route::get('/dashboard-informasi',[DashboardBerandaControllerController::class, 'informasi'])->name('informasi');
    Route::get('/dashboard-informasi-edit-{SubJudul}',[DashboardBerandaControllerController::class, 'informasiEdit'])->name('informasi.edit');
    Route::post('/dashboard-informasi',[DashboardBerandaControllerController::class, 'informasiStore'])->name('informasi.store');
});

require __DIR__.'/auth.php';
