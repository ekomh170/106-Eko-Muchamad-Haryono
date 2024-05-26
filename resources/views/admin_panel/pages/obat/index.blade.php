@extends('admin_panel.layouts.master')

@section('title', 'Data Obat')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Data Obat</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Obat</th>
                                    <th scope="col">Nama Obat</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jenis Obat</th>
                                    <th scope="col">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($obat as $o)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $o->kode_obat }}</td>
                                        <td>{{ $o->nama_obat }}</td>
                                        <td>{{ $o->harga_obat }}</td>
                                        <td>{{ $o->jenis_obat }}</td>
                                        <td>{{ $o->stok_obat }}</td>
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
