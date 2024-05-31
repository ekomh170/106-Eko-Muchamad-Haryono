@extends('admin_panel.layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-users fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Pelanggan</p>
                        <h6 class="mb-0">{{ $pelanggan }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-pills fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Obat</p>
                        <h6 class="mb-0">{{ $obat }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-money-bill fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Transaksi</p>
                        <h6 class="mb-0">{{ $transaksi }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-receipt fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Detail Transaksi</p>
                        <h6 class="mb-0">{{ $detail_transaksi }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-credit-card fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Metode Pembayaran</p>
                        <h6 class="mb-0">{{ $metode_pembayaran }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik  Start -->
    {{-- <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Penjualan Global</h6>
                        <a href="">Lihat Semua</a>
                    </div>
                    <canvas id="worldwide-sales"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Penjualan & Pendapatan</h6>
                        <a href="">Lihat Semua</a>
                    </div>
                    <canvas id="sales-revenue"></canvas>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Grafik  End -->
@endsection
