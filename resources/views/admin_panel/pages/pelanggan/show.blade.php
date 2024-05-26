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
                        <h4 class="card-title mb-0">{{ $pelanggan->nama_pelanggan }}</h4>
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
                                        <td>{{ $pelanggan->kode_pelanggan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Pelanggan</th>
                                        <td>{{ $pelanggan->nama_pelanggan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat</th>
                                        <td>{{ $pelanggan->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">No Telp</th>
                                        <td>{{ $pelanggan->no_telp }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">No WA</th>
                                        <td>{{ $pelanggan->no_wa }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Dibuat Pada</th>
                                        <td>{{ $pelanggan->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Diperbarui Pada</th>
                                        <td>{{ $pelanggan->updated_at }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ route('Pelanggan.edit', $pelanggan->id_pelanggan) }}" class="btn btn-warning btn-sm me-2">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('Pelanggan.destroy', $pelanggan->id_pelanggan) }}" method="POST" style="display:inline-block;">
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
</div>


@endsection
