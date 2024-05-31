<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\LaporanController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\DetailTransaksiController;

// Routing Landing Page
Route::get('/', function () {
    return view('landing_page.pages.index');
});

Route::get('/about', function () {
    return view('landing_page.pages.about');
});

Route::get('/services', function () {
    return view('landing_page.pages.services');
});

Route::get('/contact', function () {
    return view('landing_page.pages.contact');
});

// Routing Landing Page

// ===================================================================

// Routing Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ====================================================================

// Routing Admin Panel dengan Middleware Auth
Route::middleware(['web', 'auth'])->group(function () {
    // Dashboard
    Route::get('/AdminPanel', [DashboardController::class, 'index']);

    // Edit Profile
    Route::get('/AdminPanel/EditProfile', [UserProfileController::class, 'index'])->name('user_profile.index');
    Route::get('/AdminPanel/EditProfile/edit', [UserProfileController::class, 'edit'])->name('user_profile.edit');

    // Update the profile
    Route::put('/AdminPanel/EditProfile/update', [UserProfileController::class, 'update'])->name('user_profile.update');

    // Pelanggan
    Route::resource('/AdminPanel/Pelanggan', PelangganController::class);

    // Transaksi
    Route::resource('/AdminPanel/Transaksi', TransaksiController::class)->except([
        'show'
    ]);

    // Obat
    Route::resource('/AdminPanel/Obat', ObatController::class);

    // Metode Pembayaran
    Route::resource('/AdminPanel/MetodePembayaran', MetodePembayaranController::class);

    // Laporan
    Route::resource('/AdminPanel/Laporan', LaporanController::class);

    // Users
    Route::resource('/AdminPanel/Users', UserController::class);

    // Roles
    Route::resource('/AdminPanel/Roles', RoleController::class);

    // Detail Transaksi
    Route::resource('/AdminPanel/DetailTransaksi', DetailTransaksiController::class)->except([
        'create', 'store'
    ]);;
});
