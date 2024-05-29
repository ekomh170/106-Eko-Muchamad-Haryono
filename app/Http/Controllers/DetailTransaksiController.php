<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use App\Models\Obat;
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


    public function create()
    {
        $transaksi = Transaksi::all();
        $obat = Obat::all();
        return view('admin_panel.pages.detail_transaksi.create', compact('transaksi', 'obat'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah_obat' => 'required|integer',
            'id_transaksi' => 'required|exists:transaksi,id_transaksi',
            'id_obat' => 'required|exists:obat,id_obat',
        ]);

        DetailTransaksi::create($validatedData);

        return redirect()->route('detail_transaksi.index')->with('success', 'Detail Transaksi berhasil ditambahkan');
    }

    public function show($id)
    {
        $detail_transaksi = DetailTransaksi::with('transaksi', 'obat')->findOrFail($id);
        return view('admin_panel.pages.detail_transaksi.show', compact('detail_transaksi'));
    }

    public function edit($id)
    {
        $detail_transaksi = DetailTransaksi::findOrFail($id);
        $transaksi = Transaksi::all();
        $obat = Obat::all();
        return view('admin_panel.pages.detail_transaksi.edit', compact('detail_transaksi', 'transaksi', 'obat'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jumlah_obat' => 'required|integer',
            'id_transaksi' => 'required|exists:transaksi,id_transaksi',
            'id_obat' => 'required|exists:obat,id_obat',
        ]);

        DetailTransaksi::where('id_detail_transaksi', $id)->update($validatedData);

        return redirect()->route('DetailTransaksi.index')->with('success', 'Detail Transaksi berhasil diperbarui');
    }

    public function destroy($id)
    {
        DetailTransaksi::where('id_detail_transaksi', $id)->delete();

        return redirect()->route('DetailTransaksi.index')->with('success', 'Detail Transaksi berhasil dihapus');
    }
}
