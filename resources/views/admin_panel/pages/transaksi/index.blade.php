@extends('admin_panel.layouts.master')

@section('title', 'Halaman Utama Data Transaksi')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Daftar Transaksi</h6>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total Pembayaran</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Metode Pembayaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksi as $index => $t)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $t->kode_transaksi }}</td>
                                    <td>{{ $t->tanggal_transaksi }}</td>
                                    <td>{{ $t->total_pembayaran }}</td>
                                    <td>{{ $t->pelanggan->nama_pelanggan }}</td>
                                    <td>{{ $t->metodePembayaran->nama_metode_pembayaran }}</td>
                                    <td>
                                        {{-- <a href="{{ route('transaksi.show', $t->id_transaksi) }}" class="btn btn-info btn-sm">Lihat</a> --}}
                                        {{-- <a href="{{ route('transaksi.edit', $t->id_transaksi) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('transaksi.destroy', $t->id_transaksi) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
