@extends('admin_panel.layouts.master')

@section('title', 'Data Metode Pembayaran')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="mb-0">Daftar Metode Pembayaran</h6>
                        <a href="{{ route('MetodePembayaran.create') }}" class="btn btn-success">Tambah Data</a>
                    </div>

                    <!-- Bar Pencarian dan Penyaringan -->
                    <div class="d-flex justify-content-between mb-3">
                        <form method="GET" action="{{ route('MetodePembayaran.index') }}" class="d-flex">
                            <input type="text" class="form-control me-2" name="search" id="search"
                                placeholder="Cari metode pembayaran..." value="{{ request('search') }}">
                            <select name="sort" class="form-select me-2">
                                <option value="">Sort By</option>
                                <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Lama</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Saring</button>
                        </form>
                    </div>

                    <!-- Tabel Metode Pembayaran -->
                    <div class="table-responsive">
                        <table class="table table-hover table-striped" id="metodePembayaranTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Metode Pembayaran</th>
                                    <th scope="col">Nama Metode Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($metodePembayaran as $index => $metode)
                                    <tr>
                                        <th scope="row">{{ $metodePembayaran->firstItem() + $index }}</th>
                                        <td>{{ $metode->kode_metode_pembayaran }}</td>
                                        <td>{{ $metode->nama_metode_pembayaran }}</td>
                                        <td>
                                            <a href="{{ route('MetodePembayaran.show', $metode->id_metode_pembayaran) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i> Lihat
                                            </a>
                                            <a href="{{ route('MetodePembayaran.edit', $metode->id_metode_pembayaran) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <form
                                                action="{{ route('MetodePembayaran.destroy', $metode->id_metode_pembayaran) }}"
                                                method="POST" style="display:inline-block;">
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

                    <!-- Tautan Halaman -->
                    <div class="d-flex justify-content-center mt-3">
                        {{ $metodePembayaran->links('admin_panel.partials.pagination') }}
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
