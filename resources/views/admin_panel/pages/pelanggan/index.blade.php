@extends('admin_panel.layouts.master')

@section('title', 'Data Pelanggan')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Daftar Pelanggan</h6>
                
                <!-- Search Bar -->
                <div class="mb-3">
                    <input type="text" class="form-control" id="search" placeholder="Cari pelanggan...">
                </div>
                
                <!-- Tabel Pelanggan -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="pelangganTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Pelanggan</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">No WA</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelanggan as $index => $p)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $p->kode_pelanggan }}</td>
                                    <td>{{ $p->nama_pelanggan }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->no_telp }}</td>
                                    <td>{{ $p->no_wa }}</td>
                                    <td>
                                        <a href="{{ route('Pelanggan.show', $p->id_pelanggan) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('Pelanggan.edit', $p->id_pelanggan) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('Pelanggan.destroy', $p->id_pelanggan) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
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

<script>
    document.getElementById('search').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let rows = document.querySelectorAll('#pelangganTable tbody tr');
        rows.forEach(row => {
            let text = row.innerText.toUpperCase();
            row.style.display = text.indexOf(filter) > -1 ? '' : 'none';
        });
    });
</script>

@endsection
