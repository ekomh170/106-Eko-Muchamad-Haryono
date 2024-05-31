@extends('landing_page.layouts.master')

@section('title', 'HomePage')

@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Si ApoTrack <span class="d-block">Apotik Bogor</span></h1>
                        <p class="mb-4">ApoTrack adalah sebuah aplikasi berbasis web yang dirancang khusus untuk mengelola sebuah apotik. Sistem Informasi apotik dalam mengelola inventaris obat, transaksi penjualan, dan manajemen data pelanggan.</p>
                        <p><a href="{{ url('login') }}" class="btn btn-secondary me-2">Login Petugas</a><a href="{{ url('services') }}"
                                class="btn btn-white-outline">Layanan & Obat</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('assets/landing_page/images/desain/apotik.png') }}" class="img-fluid" style="width: 600px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Produk Kami :</h2>
                    <p class="mb-4">Kami menyediakan berbagai macam obat-obatan berkualitas untuk kebutuhan kesehatan Anda. Temukan produk terbaik dengan harga terjangkau.</p>
                    <p><a href="{{ url('shop') }}" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ url('cart') }}">
                        <img src="{{ asset('assets/landing_page/images/product-1.png') }}"
                            class="img-fluid product-thumbnail">
                        <h3 class="product-title">Paracetamol</h3>
                        <strong class="product-price">Rp 5.000</strong>

                        <span class="icon-cross">
                            <img src="{{ asset('assets/landing_page/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ url('cart') }}">
                        <img src="{{ asset('assets/landing_page/images/product-2.png') }}"
                            class="img-fluid product-thumbnail">
                        <h3 class="product-title">Amoxicillin</h3>
                        <strong class="product-price">Rp 10.000</strong>

                        <span class="icon-cross">
                            <img src="{{ asset('assets/landing_page/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ url('cart') }}">
                        <img src="{{ asset('assets/landing_page/images/product-3.png') }}"
                            class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ibuprofen</h3>
                        <strong class="product-price">Rp 8.000</strong>

                        <span class="icon-cross">
                            <img src="{{ asset('assets/landing_page/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Kenapa Kamu Harus Pilih Toko Ini?</h2>
                    <p>Kami menyediakan layanan terbaik untuk memastikan kesehatan Anda tetap terjaga. Berikut beberapa alasan mengapa Anda harus memilih kami:</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/landing_page/images/truck.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>Pengiriman Cepat & Gratis</h3>
                                <p>Pengiriman cepat dan gratis untuk wilayah tertentu dengan minimal pembelian.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/landing_page/images/bag.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>Mudah untuk Belanja</h3>
                                <p>Proses belanja yang mudah dan praktis dengan berbagai metode pembayaran.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/landing_page/images/support.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>Dukungan 24/7</h3>
                                <p>Layanan pelanggan kami siap membantu Anda kapan saja, 24 jam sehari.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/landing_page/images/return.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>Pengembalian Mudah</h3>
                                <p>Garansi pengembalian produk yang mudah jika Anda tidak puas dengan pembelian Anda.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
        <div class="container">
            <div class="row">
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/landing_page/images/product-1.png') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Panadol</h3>
                            <p>Obat pereda nyeri dan penurun demam yang efektif untuk mengatasi berbagai macam sakit.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/landing_page/images/product-2.png') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Amoxicillin</h3>
                            <p>Antibiotik yang digunakan untuk mengobati berbagai infeksi bakteri di dalam tubuh.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/landing_page/images/product-3.png') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Vitamin C</h3>
                            <p>Suplemen untuk meningkatkan daya tahan tubuh dan menangkal radikal bebas.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
    <!-- End Popular Product -->
@endsection
