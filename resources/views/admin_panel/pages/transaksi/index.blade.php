@extends('admin_panel.layouts.master')

@section('title', 'Data Transaksi')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <!-- Header Section -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="mb-0">Daftar Transaksi</h6>
                    <a href="{{ route('Transaksi.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
                
                <!-- Search and Filter Bar -->
                <div class="d-flex justify-content-between mb-3">
                    <form method="GET" action="{{ route('Transaksi.index') }}" class="d-flex">
                        <input type="text" class="form-control me-2" name="search" id="search" placeholder="Cari transaksi..." value="{{ request('search') }}">
                        <select name="sort" class="form-select me-2">
                            <option value="">Sort By</option>
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Lama</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
                
                <!-- Tabel Transaksi -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="transaksiTable">
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
                                    <th scope="row">{{ $transaksi->firstItem() + $index }}</th>
                                    <td>{{ $t->kode_transaksi }}</td>
                                    <td>{{ $t->tanggal_transaksi }}</td>
                                    <td>{{ $t->total_pembayaran }}</td>
                                    <td>{{ $t->pelanggan->nama_pelanggan }}</td>
                                    <td>{{ $t->metodePembayaran->nama_metode_pembayaran }}</td>
                                    <td>
                                        <a href="{{ route('Transaksi.show', $t->id_transaksi) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" title="Lihat Detail">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('Transaksi.edit', $t->id_transaksi) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Edit Data">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('Transaksi.destroy', $t->id_transaksi) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" data-bs-toggle="tooltip" title="Hapus Data">
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
                    {{ $transaksi->links('admin_panel.partials.pagination') }}
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
    
    // Enable Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>

@endsection
