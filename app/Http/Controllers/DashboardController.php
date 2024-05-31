<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\DetailTransaksi;
use App\Models\Obat;
use App\Models\Transaksi;
use App\Models\MetodePembayaran;


class DashboardController extends Controller
{
    public function index()
    {
        // Menampilkan Data Jumlah Pelanggan, Obat, Transaksi, Detail Transaksi & Metode Pembayaran

        $pelanggan = Pelanggan::count();
        $obat = Obat::count();
        $transaksi = Transaksi::count();
        $detail_transaksi = DetailTransaksi::count();
        $metode_pembayaran = MetodePembayaran::count();

        return view('admin_panel.pages.index', compact([
            'pelanggan',
            'obat',
            'transaksi',
            'detail_transaksi',
            'metode_pembayaran',
        ]));
    }
}
