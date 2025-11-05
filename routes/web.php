<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;


Route::get('/', [LandingController::class, 'index'])->name('landing');

// 1. Route GET untuk menampilkan halaman pilihan peran (jika ada)
Route::get('/login-role', [LandingController::class, 'loginRole'])->name('login.role');

// 2. TAMBAHKAN Route POST untuk memproses form pilihan peran
Route::post('/login-role', [LandingController::class, 'processRoleSelection'])->name('login.role.submit');

Route::get('/guru/login', function () {
    return view('landingGuru');
})->name('login.guru');

Route::get('/wali/login', function () {
    return view('landingWali');
})->name('login.wali');

Route::get('/admin/login', function () {
    return view('landingAdmin');
})->name('login.admin');

// Contoh Halaman Setelah Login (Admin Dashboard, dst.)
Route::get('/admin/dashboard', function () {
    return view('admin_dashboard'); // Anda perlu membuat file ini
})->name('admin.dashboard');

Route::get('/guru/dashboard', function () {
    return view('guru_dashboard'); // Anda perlu membuat file ini
})->name('guru.dashboard');

Route::get('/wali/dashboard', function () {
    return view('wali_dashboard'); // Anda perlu membuat file ini
})->name('wali.dashboard');