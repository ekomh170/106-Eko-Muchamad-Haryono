<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin_panel.pages.pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        return view('admin_panel.pages.pelanggan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_pelanggan' => 'required|unique:pelanggan|max:255',
            'nama_pelanggan' => 'required|max:255',
            'alamat' => 'nullable',
            'no_telp' => 'nullable',
            'no_wa' => 'nullable',
        ]);

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

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus');
    }
}
