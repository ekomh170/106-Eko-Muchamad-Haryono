<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use App\Models\Obat;
use App\Models\Pelanggan;
use App\Models\MetodePembayaran;

use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'latest'); // Set default to 'latest' if not provided

        $query = DetailTransaksi::with('transaksi', 'obat');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->whereHas('transaksi', function ($query) use ($search) {
                    $query->where('kode_transaksi', 'LIKE', "%{$search}%")
                        ->orWhere('nama_customer', 'LIKE', "%{$search}%");
                })->orWhereHas('obat', function ($query) use ($search) {
                    $query->where('nama_obat', 'LIKE', "%{$search}%")
                        ->orWhere('kode_obat', 'LIKE', "%{$search}%");
                });
            });
        }

        if ($sort == 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        }

        $detail_transaksi = $query->paginate(5)->appends(['search' => $search, 'sort' => $sort]);

        return view('admin_panel.pages.detail_transaksi.index', compact('detail_transaksi', 'search', 'sort'));
    }

    public function show($id)
    {
        $transaksi = Transaksi::with('pelanggan', 'MetodePembayaran')->findOrFail($id);
        // Yang Berelasi Dengan Detail Transaksi
        $transaksi_list = $transaksi->detailTransaksi;
        return view('admin_panel.pages.detail_transaksi.show', compact('transaksi', 'transaksi_list'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::with('detailTransaksi')->findOrFail($id);
        $pelanggan = Pelanggan::all();
        $metode_pembayaran = MetodePembayaran::all();
        $obat = Obat::all();
        return view('admin_panel.pages.detail_transaksi.edit', compact('transaksi', 'pelanggan', 'metode_pembayaran', 'obat'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan',
            'details.*.id_obat' => 'required|exists:obat,id_obat',
            'details.*.jumlah_obat' => 'required|integer|min:1',
        ]);

        // Update Transaksi
        $transaksi = Transaksi::findOrFail($id);
        

        $total_pembayaran = 0; // Inisialisasi total pembayaran

        // Update Details
        if ($request->has('detailTransaksi')) {
            foreach ($request->detailTransaksi as $detail) {
                if (isset($detail['id_obat'])) {
                    $obat = Obat::findOrFail($detail['id_obat']);
                    $harga_obat = $obat->harga_obat;
                    $jumlah_obat = $detail['jumlah_obat'];
                    $subtotal = $harga_obat * $jumlah_obat; // Hitung subtotal pembayaran untuk setiap item
                    $total_pembayaran += $subtotal; // Tambahkan subtotal ke total pembayaran

                    // Cek apakah subtotal dan total_pembayaran dihitung dengan benar
                    
                    $existingDetail = DetailTransaksi::updateOrCreate(
                        ['id_transaksi' => $transaksi->id_transaksi, 'id_obat' => $detail['id_obat']],
                        ['jumlah_obat' => $jumlah_obat]
                    );
                }
            }
        }

        $cek = $transaksi->update([
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'id_pelanggan' => $request->id_pelanggan,
            'total_pembayaran' => $total_pembayaran


        ]);

        return redirect()->route('DetailTransaksi.show', ['DetailTransaksi' => $transaksi->id_transaksi])->with('success', 'Transaksi berhasil diperbarui');
    }



    public function destroy($id)
    {
        $detailTransaksi = DetailTransaksi::findOrFail($id);
        $detailTransaksi->delete();

        return redirect()->route('Transaksi.show', ['Transaksi' => $detailTransaksi->transaksi->id_transaksi])->with('success', 'Detail Transaksi berhasil dihapus');
    }
}
