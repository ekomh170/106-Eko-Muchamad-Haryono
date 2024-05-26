@extends('admin_panel.layouts.master')

@section('title', 'Halaman Utama Data Metode Pembayaran')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Data Metode Pembayaran</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Metode Pembayaran</th>
                                    <th scope="col">Nama Metode Pembayaran</th>
                                    <th scope="col">Tanggal Dibuat</th>
                                    <th scope="col">Tanggal Diperbarui</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($metode_pembayaran as $metode)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $metode->kode_metode_pembayaran }}</td>
                                        <td>{{ $metode->nama_metode_pembayaran }}</td>
                                        <td>{{ $metode->created_at }}</td>
                                        <td>{{ $metode->updated_at }}</td>
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
