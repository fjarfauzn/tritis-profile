<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', [ProfileController::class, 'index'])->name('profile');

Route::get('/potensi', [PotensiController::class, 'index'])->name('potensi');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');