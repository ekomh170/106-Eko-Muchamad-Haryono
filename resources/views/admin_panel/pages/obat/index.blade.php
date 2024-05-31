@extends('admin_panel.layouts.master')

@section('title', 'Data Obat')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="mb-0">Daftar Obat</h6>
                    <a href="{{ route('Obat.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
                
                <!-- Search and Filter Bar -->
                <div class="d-flex justify-content-between mb-3">
                    <form method="GET" action="{{ route('Obat.index') }}" class="d-flex">
                        <input type="text" class="form-control me-2" name="search" id="search" placeholder="Cari obat..." value="{{ request('search') }}">
                        <select name="sort" class="form-select me-2">
                            <option value="">Sort By</option>
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Lama</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
                
                <!-- Tabel Obat -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="obatTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Obat</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Jenis Obat</th>
                                <th scope="col">Harga Obat</th>
                                <th scope="col">Stok Obat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($obat as $index => $o)
                                <tr>
                                    <th scope="row">{{ $obat->firstItem() + $index }}</th>
                                    <td>{{ $o->kode_obat }}</td>
                                    <td>{{ $o->nama_obat }}</td>
                                    <td>{{ $o->jenis_obat }}</td>
                                    <td>{{ $o->harga_obat }}</td>
                                    <td>{{ $o->stok_obat }}</td>
                                    <td>
                                        <a href="{{ route('Obat.show', $o->id_obat) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('Obat.edit', $o->id_obat) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('Obat.destroy', $o->id_obat) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
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
                    {{ $obat->links('admin_panel.partials.pagination') }}
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
