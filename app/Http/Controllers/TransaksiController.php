<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\MetodePembayaran;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve search and sort parameters
        $search = $request->input('search');
        $sort = $request->input('sort', 'latest');

        // Initialize query
        $query = Transaksi::with('pelanggan', 'metodePembayaran');

        // Apply search filter
        if ($search) {
            $query->whereHas('pelanggan', function ($q) use ($search) {
                $q->where('nama_pelanggan', 'like', "%{$search}%");
            })
                ->orWhere('kode_transaksi', 'like', "%{$search}%");
        }

        // Apply sort
        if ($sort) {
            if ($sort == 'latest') {
                $query->orderBy('kode_transaksi', 'desc');
            } elseif ($sort == 'oldest') {
                $query->orderBy('kode_transaksi', 'asc');
            }
        }

        // Paginate results
        $transaksi = $query->paginate(10);

        // Pass the query parameters back to the view
        return view('admin_panel.pages.transaksi.index', compact('transaksi', 'search', 'sort'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $metode_pembayaran = MetodePembayaran::all();
        return view('admin_panel.pages.transaksi.create', compact('pelanggan', 'metode_pembayaran'));
    }

    public function store(Request $request)
    {
        $kodeTransaksi = Transaksi::generateKodeTransaksi();

        $validatedData = $request->validate([

            'tanggal_transaksi' => 'required|date',
            'id_pelanggan' => 'required',
            'id_metode_pembayaran' => 'required',
            'kode_transaksi' => 'required|unique:transaksi|max:255',
            
            // 'total_pembayaran' => 'required|numeric',
            // 'tanggal_cetak' => 'required|date',
        ]);

        $validatedData['kode_transaksi'] = $kodeTransaksi;
        $validatedData['total_pembayaran'] = 0;
    
        Transaksi::create($validatedData);

        return redirect()->route('Transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function show($id)
    {
        $transaksi = Transaksi::with('pelanggan', 'MetodePembayaran')->findOrFail($id);
        // Yang Berelasi Dengan Detail Transaksi
        $transaksi_list = $transaksi->detailTransaksi;
        return view('admin_panel.pages.transaksi.show', compact('transaksi', 'transaksi_list'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $metode_pembayaran = MetodePembayaran::all();
        return view('admin_panel.pages.transaksi.edit', compact('transaksi', 'pelanggan', 'metode_pembayaran'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            
            'tanggal_transaksi' => 'required|date',
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan',
            'id_metode_pembayaran' => 'required|exists:metode_pembayaran,id_metode_pembayaran',

            // 'kode_transaksi' => 'required|max:255|unique:transaksi,kode_transaksi,' . $id . ',id_transaksi',
            // 'total_pembayaran' => 'required|numeric',
            // 'tanggal_cetak' => 'required|date',
        ]);

        Transaksi::where('id_transaksi', $id)->update($validatedData);

        return redirect()->route('Transaksi.index')->with('success', 'Transaksi berhasil diperbarui');
    }

    public function destroy($id)
    {
        Transaksi::where('id_transaksi', $id)->delete();

        return redirect()->route('Transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
