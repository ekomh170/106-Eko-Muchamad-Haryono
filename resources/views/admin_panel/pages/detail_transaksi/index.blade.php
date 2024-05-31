@extends('admin_panel.layouts.master')

@section('title', 'Data Detail Transaksi')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="mb-0">Daftar Detail Transaksi</h6>
                </div>
                
                <!-- Search and Filter Bar -->
                <div class="d-flex justify-content-between mb-3">
                    <form method="GET" action="{{ route('DetailTransaksi.index') }}" class="d-flex">
                        <input type="text" class="form-control me-2" name="search" id="search" placeholder="Cari detail transaksi..." value="{{ request('search') }}">
                        <select name="sort" class="form-select me-2">
                            <option value="">Sort By</option>
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Lama</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
                
                <!-- Tabel Detail Transaksi -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="detailTransaksiTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Kode Obat</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Jumlah Obat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($detail_transaksi as $index => $detail)
                                <tr>
                                    <th scope="row">{{ $detail_transaksi->firstItem() + $index }}</th>
                                    <td>{{ $detail->transaksi->kode_transaksi }}</td>
                                    <td>{{ $detail->transaksi->pelanggan->nama_pelanggan }}</td>
                                    <td>{{ $detail->obat->kode_obat }}</td>
                                    <td>{{ $detail->obat->nama_obat }}</td>
                                    <td>{{ $detail->jumlah_obat }}</td>
                                    <td>
                                        <a href="{{ route('DetailTransaksi.show', $detail->id_transaksi) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination Links -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $detail_transaksi->links('admin_panel.partials.pagination') }}
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
