@extends('admin_panel.layouts.master')

@section('title', 'Tambah Pelanggan')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xl-8">
            <div class="card bg-secondary text-white rounded p-4">
                <div class="card-header text-center">
                    <h4 class="card-title mb-0">Form Tambah Pelanggan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Pelanggan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_pelanggan" class="form-label"><i class="fas fa-id-badge"></i> Kode Pelanggan</label>
                            <input type="text" class="form-control" id="kode_pelanggan" name="kode_pelanggan" placeholder="Masukkan Kode Pelanggan" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_pelanggan" class="form-label"><i class="fas fa-user"></i> Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label"><i class="fas fa-map-marker-alt"></i> Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label"><i class="fas fa-phone"></i> Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <label for="no_wa" class="form-label"><i class="fas fa-phone-alt"></i> Nomor WhatsApp</label>
                            <input type="text" class="form-control" id="no_wa" name="no_wa" placeholder="Masukkan Nomor WhatsApp">
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
