<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'latest'); // Set default to 'latest' if not provided

        $query = Obat::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('kode_obat', 'LIKE', "%{$search}%")
                    ->orWhere('nama_obat', 'LIKE', "%{$search}%")
                    ->orWhere('jenis_obat', 'LIKE', "%{$search}%");
            });
        }

        if ($sort == 'latest') {
            $query->orderBy('created_at', 'desc'); // Assuming 'created_at' is the timestamp column
        } elseif ($sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        }

        $obat = $query->paginate(5)->appends(['search' => $search, 'sort' => $sort]);

        return view('admin_panel.pages.obat.index', compact('obat', 'search', 'sort'));
    }


    public function create()
    {
        return view('admin_panel.pages.obat.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_obat' => 'required|unique:obat|max:255',
            'nama_obat' => 'required|max:255',
            'harga_obat' => 'required|numeric',
            'jenis_obat' => 'required|max:255',
            'stok_obat' => 'required|integer',
        ]);

        Obat::create($validatedData);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan');
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.show', compact('obat'));
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('admin_panel.pages.obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_obat' => 'required|max:255|unique:obat,kode_obat,' . $id . ',id_obat',
            'nama_obat' => 'required|max:255',
            'harga_obat' => 'required|numeric',
            'jenis_obat' => 'required|max:255',
            'stok_obat' => 'required|integer',
        ]);

        Obat::where('id_obat', $id)->update($validatedData);

        return redirect()->route('Obat.index')->with('success', 'Obat berhasil diperbarui');
    }

    public function destroy($id)
    {
        Obat::where('id_obat', $id)->delete();

        return redirect()->route('Obat.index')->with('success', 'Obat berhasil dihapus');
    }
}
