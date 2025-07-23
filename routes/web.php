<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/struktur-organisasi', [OrganizationController::class, 'index'])->name('struktur-organisasi');;

Route::get('/kondisi-demografi', [DemografiController::class, 'index'])->name('kondisi-demografi');

Route::get('/kondisigeografis', function () {
    return view('kondisigeografis');
});

Route::get('/potensi', function () {
    return view('potensidesa');
});

Route::prefix('berita')->group(function () {
    // Public routes
    Route::get('/', [BeritaController::class, 'index'])->name('berita.index');

    // Admin routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/tambah', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/tambah', [BeritaController::class, 'store'])->name('berita.store');
        Route::get('/edit/list', [BeritaController::class, 'list'])->name('berita.list');
        Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/edit/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::delete('/hapus/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    });

    // Route dinamis untuk detail berita (public)
    Route::get('/{id}', [BeritaController::class, 'show'])
        ->name('berita.detail')
        ->where('id', '[0-9]+');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
