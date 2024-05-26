<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\DashboardController;

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

// Routing Admin Panel -> Dashboard
Route::get('/AdminPanel', [DashboardController::class, 'index']);

// Routing Admin Panel -> Edit Profile

// Routing Admin Panel -> Pelanggan
Route::resource('/AdminPanel/Pelanggan', PelangganController::class);

// Routing Admin Panel -> Transaksi
Route::resource('/AdminPanel/Transaksi', TransaksiController::class);

// Routing Admin Panel -> Obat
Route::resource('/AdminPanel/Obat', ObatController::class);

// Routing Admin Panel -> Metode Pembayaran
Route::resource('/AdminPanel/MetodePembayaran', MetodePembayaranController::class);

// Routing Admin Panel -> Laporan
Route::resource('/AdminPanel/Laporan', LaporanController::class);





// Routing  Admin Panel -> Users
Route::resource('/AdminPanel/Users', UserController::class);

// Routing  Admin Panel -> Roles
Route::resource('/AdminPanel/Roles', RoleController::class);



// Routing  Admin Panel -> Detail Transaksi
Route::resource('/AdminPanel/DetailTransaksi', DetailTransaksiController::class);

