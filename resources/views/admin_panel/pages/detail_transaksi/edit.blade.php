@extends('admin_panel.layouts.master')

@section('title', 'Edit Transaksi')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-xl-8">
                <div class="card bg-secondary text-white rounded p-4">
                    <div class="card-header text-center">
                        <h4 class="card-title mb-0">Form Edit Transaksi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('DetailTransaksi.update', $transaksi->id_transaksi) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="tanggal_transaksi" class="form-label"><i class="fas fa-calendar"></i> Tanggal Transaksi</label>
                                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_pelanggan" class="form-label"><i class="fas fa-user"></i> Pelanggan</label>
                                <select class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                                    <option value="" disabled>Pilih Pelanggan</option>
                                    @foreach ($pelanggan as $p)
                                        <option value="{{ $p->id_pelanggan }}" {{ $p->id_pelanggan == $transaksi->id_pelanggan ? 'selected' : '' }}>{{ $p->nama_pelanggan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="detail_transaksi" class="form-label"><i class="fas fa-pills"></i> Detail Transaksi</label>
                                <table class="table table-bordered text-white">
                                    <thead>
                                        <tr>
                                            <th>Obat</th>
                                            <th>Jumlah</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="detail-transaksi-body">
                                        @foreach ($transaksi->detailTransaksi as $detail)
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="detailTransaksi[{{ $loop->index }}][id_obat]" required>
                                                        <option value="" disabled>Pilih Obat</option>
                                                        @foreach ($obat as $o)
                                                            <option value="{{ $o->id_obat }}" {{ $o->id_obat == $detail->id_obat ? 'selected' : '' }}>{{ $o->nama_obat }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" name="detailTransaksi[{{ $loop->index }}][jumlah_obat]" value="{{ $detail->jumlah_obat }}" required>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger remove-detail"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-primary" id="add-detail"><i class="fas fa-plus"></i> Tambah Detail</button>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-detail').addEventListener('click', function() {
            var tableBody = document.getElementById('detail-transaksi-body');
            var rowCount = tableBody.rows.length;
            var row = tableBody.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            cell1.innerHTML = '<select class="form-control" name="detailTransaksi[' + rowCount + '][id_obat]" required><option value="" disabled selected>Pilih Obat</option>@foreach ($obat as $o)<option value="{{ $o->id_obat }}">{{ $o->nama_obat }}</option>@endforeach</select>';
            cell2.innerHTML = '<input type="number" class="form-control" name="detailTransaksi[' + rowCount + '][jumlah_obat]" required>';
            cell3.innerHTML = '<button type="button" class="btn btn-danger remove-detail"><i class="fas fa-trash-alt"></i></button>';
        });

        document.addEventListener('click', function(e) {
            if(e.target && e.target.classList.contains('remove-detail')) {
                var row = e.target.closest('tr');
                row.parentNode.removeChild(row);
            }
        });
    </script>

@endsection
