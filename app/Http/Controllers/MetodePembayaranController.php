<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'latest'); // Set default to 'latest' if not provided

        $query = MetodePembayaran::query(); // Change to MetodePembayaran model

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('kode_metode_pembayaran', 'LIKE', "%{$search}%")
                    ->orWhere('nama_metode_pembayaran', 'LIKE', "%{$search}%");
            });
        }

        if ($sort == 'latest') {
            $query->orderBy('created_at', 'desc'); // Assuming you want to sort by creation date
        } elseif ($sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        }

        $metodePembayaran = $query->paginate(5)->appends(['search' => $search, 'sort' => $sort]);

        return view('admin_panel.pages.metode_pembayaran.index', compact('metodePembayaran', 'search', 'sort')); // Update view path
    }


    public function create()
    {
        return view('admin_panel.pages.metode_pembayaran.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_metode_pembayaran' => 'required|unique:metode_pembayaran|max:255',
            'nama_metode_pembayaran' => 'required|max:255',
        ]);

        MetodePembayaran::create($validatedData);

        return redirect()->route('MetodePembayaran.index')->with('success', 'Metode Pembayaran berhasil ditambahkan');
    }

    public function show($id)
    {
        $metode_pembayaran = MetodePembayaran::findOrFail($id);
        return view('MetodePembayaran.show', compact('metode_pembayaran'));
    }

    public function edit($id)
    {
        $metode_pembayaran = MetodePembayaran::findOrFail($id);
        return view('admin_panel.pages.metode_pembayaran.edit', compact('metode_pembayaran'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_metode_pembayaran' => 'required|max:255|unique:metode_pembayaran,kode_metode_pembayaran,' . $id . ',id_metode_pembayaran',
            'nama_metode_pembayaran' => 'required|max:255',
        ]);

        MetodePembayaran::where('id_metode_pembayaran', $id)->update($validatedData);

        return redirect()->route('MetodePembayaran.index')->with('success', 'Metode Pembayaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        MetodePembayaran::where('id_metode_pembayaran', $id)->delete();

        return redirect()->route('MetodePembayaran.index')->with('success', 'Metode Pembayaran berhasil dihapus');
    }
}
