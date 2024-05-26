<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\MetodePembayaran;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('pelanggan', 'metodePembayaran')->get();
        return view('admin_panel.pages.transaksi.index', compact('transaksi'));
    }
}
