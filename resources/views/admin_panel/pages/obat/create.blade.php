@extends('admin_panel.layouts.master')

@section('title', 'Tambah Obat')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xl-8">
            <div class="card bg-secondary text-white rounded p-4">
                <div class="card-header text-center">
                    <h4 class="card-title mb-0">Form Tambah Obat</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Obat.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_obat" class="form-label"><i class="fas fa-barcode"></i> Kode Obat</label>
                            <input type="text" class="form-control" id="kode_obat" name="kode_obat" placeholder="Masukkan Kode Obat" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_obat" class="form-label"><i class="fas fa-pills"></i> Nama Obat</label>
                            <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Masukkan Nama Obat" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga_obat" class="form-label"><i class="fas fa-money-bill"></i> Harga Obat</label>
                            <input type="text" class="form-control" id="harga_obat" name="harga_obat" placeholder="Masukkan Harga Obat" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_obat" class="form-label"><i class="fas fa-capsules"></i> Jenis Obat</label>
                            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" placeholder="Masukkan Jenis Obat" required>
                        </div>
                        <div class="mb-3">
                            <label for="stok_obat" class="form-label"><i class="fas fa-boxes"></i> Stok Obat</label>
                            <input type="number" class="form-control" id="stok_obat" name="stok_obat" placeholder="Masukkan Stok Obat" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
