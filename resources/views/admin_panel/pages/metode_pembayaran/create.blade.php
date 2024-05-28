@extends('admin_panel.layouts.master')

@section('title', 'Tambah Metode Pembayaran')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xl-8">
            <div class="card bg-secondary text-white rounded p-4">
                <div class="card-header text-center">
                    <h4 class="card-title mb-0">Form Tambah Metode Pembayaran</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('MetodePembayaran.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_metode_pembayaran" class="form-label"><i class="fas fa-id-badge"></i> Kode Metode Pembayaran</label>
                            <input type="text" class="form-control" id="kode_metode_pembayaran" name="kode_metode_pembayaran" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_metode_pembayaran" class="form-label"><i class="fas fa-user"></i> Nama Metode Pembayaran</label>
                            <input type="text" class="form-control" id="nama_metode_pembayaran" name="nama_metode_pembayaran" required>
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
