        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <ul class="navbar-nav">

                    {{-- Pelanggan --}}
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/AdminPanel/Pelanggan') }}" class="nav-link {{ Request::is('AdminPanel/Pelanggan') ? 'active' : '' }}">Pelanggan</a>
            </li>
            {{-- Pelanggan --}}

            {{-- Obat --}}
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/AdminPanel/Obat') }}" class="nav-link {{ Request::is('AdminPanel/Obat') ? 'active' : '' }}">Obat</a>
            </li>
            {{-- Obat --}}

            {{-- Transaksi --}}
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/AdminPanel/Transaksi') }}" class="nav-link {{ Request::is('AdminPanel/Transaksi') ? 'active' : '' }}">Transaksi</a>
            </li>
            {{-- Transaksi --}}

            {{-- Detail Transaksi  --}}
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/AdminPanel/DetailTransaksi') }}" class="nav-link {{ Request::is('AdminPanel/DetailTransaksi') ? 'active' : '' }}">Detail Transaksi</a>
            </li>
            {{-- Detail Transaksi  --}}

            {{-- Pembayaran --}}
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/AdminPanel/MetodePembayaran') }}" class="nav-link {{ Request::is('AdminPanel/MetodePembayaran') ? 'active' : '' }}">Metode Pembayaran</a>
            </li>
            {{-- Pembayaran --}}

                </ul>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets/admin_panel/img/user.png') }}"
                                alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Eko Haryono</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ url('/AdminPanel/EditProfile') }}" class="dropdown-item">My Profile</a>
                            {{-- Logout Form --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out</button>
                            </form>
                            {{-- Logout Form --}}
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
