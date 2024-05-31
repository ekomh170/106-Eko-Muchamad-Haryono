@extends('admin_panel.layouts.master')

@section('title', 'Detail Data Pelanggan')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4">Detail Pelanggan</h3>
                <div class="card bg-dark text-white border border-2 border-light">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">{{ $transaksi->nama_pelanggan }}</h4>
                        <a href="{{ url('/AdminPanel/Pelanggan') }}" class="btn btn-light btn-sm">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('assets/admin_panel/img/user.jpg') }}" class="rounded-circle img-fluid mb-3" alt="Profile Picture" style="width: 150px;">
                            </div>
                            <div class="col-md-8">
                                <table class="table table-borderless table-hover">
                                    <tr>
                                        <th scope="col">Kode Pelanggan</th>
                                        <td>{{ $transaksi->pelanggan->kode_pelanggan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Kode Transaksi</th>
                                        <td>{{ $transaksi->kode_transaksi }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Pelanggan</th>
                                        <td>{{ $transaksi->pelanggan->nama_pelanggan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat</th>
                                        <td>{{ $transaksi->pelanggan->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">No. Telepon</th>
                                        <td>{{ $transaksi->pelanggan->no_telp }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Metode Pembayaran</th>
                                        <td>{{ $transaksi->metodePembayaran->nama_metode_pembayaran }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Total Pembayaran</th>
                                        <td>{{ $transaksi->total_pembayaran }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Dibuat Pada</th>
                                        <td>{{ $transaksi->created_at }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="col">Diperbarui Pada</th>
                                        <td>{{ $transaksi->updated_at }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ route('Transaksi.edit', $transaksi->id_pelanggan) }}" class="btn btn-warning btn-sm me-2">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('Transaksi.destroy', $transaksi->id_pelanggan) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h4 class="mb-4">Riwayat Transaksi</h4>
                <a href="{{ route('DetailTransaksi.edit', $transaksi->id_transaksi) }}" class="btn btn-primary btn-sm mb-3">
                    <i class="fa fa-plus"></i> Tambah Detail Transaksi
                </a>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Harga Obat</th>
                            <th scope="col">Jumlah Obat</th>
                            <th scope="col">Total Pembayaran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi_list as $index => $transaksidetail)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $transaksidetail->created_at }}</td>
                            <td>{{ $transaksidetail->obat->nama_obat }}</td>
                            <td>{{ $transaksidetail->obat->harga_obat }}</td>
                            <td>{{ $transaksidetail->jumlah_obat }}</td>
                            <td>{{ $transaksidetail->jumlah_obat * $transaksidetail->obat->harga_obat }}</td>
                            <td>
                                <a href="{{ route('DetailTransaksi.edit', $transaksidetail->id_transaksi) }}" class="btn btn-warning btn-sm me-2">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('DetailTransaksi.destroy', $transaksidetail->id_detail_transaksi) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                
            </div>
        </div>
    </div>
</div>

@endsection
