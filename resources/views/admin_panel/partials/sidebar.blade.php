<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ApoTrack</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/admin_panel/img/user.jpg') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Eko Haryono</h6>
                        <span>Admin</span>
                    </div>
                </div>

                {{-- Dashboard --}}
                <div class="navbar-nav w-100">
                    <a href="{{ url('/AdminPanel') }}" class="nav-item nav-link {{ Request::is('AdminPanel') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('/AdminPanel/EditProfile') }}" class="nav-item nav-link {{ Request::is('AdminPanel/EditProfile') ? 'active' : '' }}"><i class="fa fa-user me-2"></i>Edit Profile</a>

                    {{-- Manajemen Pelanggan --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('AdminPanel/Pelanggan*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Pelanggan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/AdminPanel/Pelanggan') }}" class="dropdown-item {{ Request::is('AdminPanel/Pelanggan') ? 'active' : '' }}">Daftar Pelanggan</a>
                            <a href="{{ url('/AdminPanel/Pelanggan/create') }}" class="dropdown-item {{ Request::is('AdminPanel/Pelanggan/create') ? 'active' : '' }}">Tambah Pelanggan</a>
                        </div>
                    </div>
                    {{-- Manajemen Pelanggan --}}

                    {{-- Transaksi --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('AdminPanel/Transaksi*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-exchange-alt me-2"></i>Transaksi</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/AdminPanel/Transaksi') }}" class="dropdown-item {{ Request::is('AdminPanel/Transaksi') ? 'active' : '' }}">Daftar Transaksi</a>
                            <a href="{{ url('/AdminPanel/Transaksi/create') }}" class="dropdown-item {{ Request::is('AdminPanel/Transaksi/create') ? 'active' : '' }}">Tambah Transaksi</a>
                        </div>
                    </div>
                    {{-- Transaksi --}}

                    {{-- Manajemen Obat --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('AdminPanel/Obat*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-pills me-2"></i>Obat</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/AdminPanel/Obat') }}" class="dropdown-item {{ Request::is('AdminPanel/Obat') ? 'active' : '' }}">Daftar Obat</a>
                            <a href="{{ url('/AdminPanel/Obat/create') }}" class="dropdown-item {{ Request::is('AdminPanel/Obat/create') ? 'active' : '' }}">Tambah Obat</a>
                        </div>
                    </div>
                    {{-- Manajemen Obat --}}

                    {{-- Metode Pembayaran --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('AdminPanel/MetodePembayaran*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-credit-card me-2"></i>Pembayaran</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/AdminPanel/MetodePembayaran') }}" class="dropdown-item {{ Request::is('AdminPanel/MetodePembayaran') ? 'active' : '' }}">Daftar Pembayaran</a>
                            <a href="{{ url('/AdminPanel/MetodePembayaran/create') }}" class="dropdown-item {{ Request::is('AdminPanel/MetodePembayaran/create') ? 'active' : '' }}">Tambah Pembayaran</a>
                        </div>
                    </div>
                    {{-- Metode Pembayaran --}}

                    {{-- Laporan --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('AdminPanel/Laporan*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Laporan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/AdminPanel/Laporan') }}" class="dropdown-item {{ Request::is('AdminPanel/Laporan') ? 'active' : '' }}">Daftar Laporan</a>
                        </div>
                    </div>
                    {{-- Laporan --}}

                    {{-- Pengaturan Users --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('AdminPanel/Users*') || Request::is('AdminPanel/Roles*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-cogs me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/AdminPanel/Users') }}" class="dropdown-item {{ Request::is('AdminPanel/Users') ? 'active' : '' }}">Menu Users Aplikasi</a>
                            <a href="{{ url('/AdminPanel/Roles') }}" class="dropdown-item {{ Request::is('AdminPanel/Roles') ? 'active' : '' }}">Menu Roles Aplikasi</a>
                        </div>
                    </div>
                    {{-- Pengaturan Users --}}

                    {{-- Bantuan --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('https://github.com/ekomh170*') || Request::is('https://www.linkedin.com/in/eko-haryono-290/*') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-question-circle me-2"></i>Informasi</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="https://github.com/ekomh170/106-Eko-Muchamad-Haryono.git" class="dropdown-item" target="_blank">Source Code</a>
                            <a href="https://github.com/ekomh170" class="dropdown-item" target="_blank">Github Pemilik</a>
                            <a href="https://www.linkedin.com/in/eko-haryono-290/" class="dropdown-item" target="_blank">Linkedin Pemilik</a>
                        </div>
                    </div>
                    {{-- Bantuan --}}

                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
