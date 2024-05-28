@extends('admin_panel.layouts.master')

@section('title', 'Tambah Transaksi')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-xl-8">
                <div class="card bg-secondary text-white rounded p-4">
                    <div class="card-header text-center">
                        <h4 class="card-title mb-0">Form Tambah Transaksi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Transaksi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="tanggal_transaksi" class="form-label"><i class="fas fa-calendar"></i> Tanggal
                                    Transaksi</label>
                                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi"
                                    value="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_pelanggan" class="form-label"><i class="fas fa-user"></i> Pelanggan</label>
                                <select class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                                    <option value="" disabled selected>Pilih Pelanggan</option>
                                    @foreach ($pelanggan as $p)
                                        <option value="{{ $p->id_pelanggan }}">{{ $p->nama_pelanggan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_metode_pembayaran" class="form-label"><i class="fas fa-credit-card"></i>
                                    Metode Pembayaran</label>
                                <select class="form-control" id="id_metode_pembayaran" name="id_metode_pembayaran" required>
                                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                                    @foreach ($metode_pembayaran as $mp)
                                        <option value="{{ $mp->id_metode_pembayaran }}">{{ $mp->nama_metode_pembayaran }}
                                        </option>
                                    @endforeach
                                </select>
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
