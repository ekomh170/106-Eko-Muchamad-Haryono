@extends('admin_panel.layouts.master')

@section('title', 'Data Pelanggan')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="mb-0">Daftar Pelanggan</h6>
                    <a href="{{ route('Pelanggan.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
                
                <!-- Search and Filter Bar -->
                <div class="d-flex justify-content-between mb-3">
                    <form method="GET" action="{{ route('Pelanggan.index') }}" class="d-flex">
                        <input type="text" class="form-control me-2" name="search" id="search" placeholder="Cari pelanggan..." value="{{ request('search') }}">
                        <select name="sort" class="form-select me-2">
                            <option value="">Sort By</option>
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Lama</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
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
                                    <th scope="row">{{ $pelanggan->firstItem() + $index }}</th>
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
                
                <!-- Pagination Links -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $pelanggan->links('admin_panel.partials.pagination') }}
                </div>
                
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('search').addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            this.form.submit();
        }
    });
</script>

@endsection
