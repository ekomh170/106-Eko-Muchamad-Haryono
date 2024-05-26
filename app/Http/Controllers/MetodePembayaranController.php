<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    public function index()
    {
        $metode_pembayaran = MetodePembayaran::all();
        return view('admin_panel.pages.metode_pembayaran.index', compact('metode_pembayaran'));
    }
}
