<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


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

// Routing Admin Panel
Route::get('/AdminPanel', function () {
    return view('admin_panel.pages.index');
});

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);


// Routing Admin Panel -> Pelanggan
Route::get('/AdminPanel/Pelanggan', function () {
    return view('admin_panel.pages.pelanggan.index');
});

// Routing Admin Panel -> Obat
Route::get('/AdminPanel/Obat', function () {
    return view('admin_panel.pages.obat.index');
});


// Routing Admin Panel -> Metode Pembayaran
Route::get('/AdminPanel/MetodePembayaran', function () {
    return view('admin_panel.pages.metode_pembayaran.index');
});

// Routing Admin Panel -> Struk
Route::get('/AdminPanel/Struk', function () {
    return view('admin_panel.pages.struk.index');
});
