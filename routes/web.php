<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Routing Landing Page
// Route::get('/', function () {
//     return view('landing_page.index');
// });

// Karena Landing Page Belum Selesai Di Buat
// Sementara
// Routing Admin Panel
Route::get('/', function () {
    return view('admin_panel.pages.index');
});
// Sementara
// Karena Landing Page Belum Selesai Di Buat

// Routing Auth
Route::get('/Login', function () {
    return view('auth.pages.login');
});

// Routing Admin Panel
Route::get('/AdminPanel', function () {
    return view('admin_panel.pages.index');
});


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

// Routing Admin Panel -> Users
Route::get('/AdminPanel/Users', function () {
    return view('admin_panel.pages.users.index');
});