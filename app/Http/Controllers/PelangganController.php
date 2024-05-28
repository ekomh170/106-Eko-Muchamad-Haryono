<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'latest'); // Set default to 'latest' if not provided

        $query = Pelanggan::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('kode_pelanggan', 'LIKE', "%{$search}%")
                    ->orWhere('nama_pelanggan', 'LIKE', "%{$search}%")
                    ->orWhere('alamat', 'LIKE', "%{$search}%")
                    ->orWhere('no_telp', 'LIKE', "%{$search}%")
                    ->orWhere('no_wa', 'LIKE', "%{$search}%");
            });
        }

        if ($sort == 'latest') {
            $query->orderBy('kode_pelanggan', 'desc');
        } elseif ($sort == 'oldest') {
            $query->orderBy('kode_pelanggan', 'asc');
        }

        $pelanggan = $query->paginate(5)->appends(['search' => $search, 'sort' => $sort]);

        return view('admin_panel.pages.pelanggan.index', compact('pelanggan', 'search', 'sort'));
    }

    public function create()
    {
        return view('admin_panel.pages.pelanggan.create');
    }

    public function store(Request $request)
    {
        $kodePelanggan = Pelanggan::generateKodePelanggan();

        $validatedData = $request->validate([
            'nama_pelanggan' => 'required|max:255',
            'alamat' => 'nullable',
            'no_telp' => 'nullable',
            'no_wa' => 'nullable',
        ]);

        $validatedData['kode_pelanggan'] = $kodePelanggan;

        Pelanggan::create($validatedData);

        return redirect()->route('Pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan');
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin_panel.pages.pelanggan.show', compact('pelanggan'));
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin_panel.pages.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_pelanggan' => 'required|max:255|unique:pelanggan,kode_pelanggan,' . $id . ',id_pelanggan',
            'nama_pelanggan' => 'required|max:255',
            'alamat' => 'nullable',
            'no_telp' => 'nullable',
            'no_wa' => 'nullable',
        ]);

        Pelanggan::where('id_pelanggan', $id)->update($validatedData);

        return redirect()->route('Pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pelanggan::where('id_pelanggan', $id)->delete();

        return redirect()->route('Pelanggan.index')->with('success', 'Pelanggan berhasil dihapus');
    }
}
