@extends('admin_panel.layouts.master')

@section('title', 'Edit Profil Pengguna')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-lg-3">
            <div class="card" style="background-color: #363636;">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="{{ Auth::user()->profile->avatar ?? 'https://bootdey.com/img/Content/avatar/avatar7.png' }}" alt="{{ Auth::user()->nama }}" class="img-fluid">
                            </div>
                            <h5 class="user-name" style="color: #cccccc;">{{ Auth::user()->nama }}</h5>
                            <h6 class="user-email" style="color: #cccccc;">{{ Auth::user()->profile->alamat }}</h6>
                        </div>
                        <div class="about" style="color: #cccccc;">
                            <h5>Tentang</h5>
                            <p>Saya {{ Auth::user()->nama }}. Desainer Full Stack yang menikmati menciptakan pengalaman pengguna yang menyenangkan dan berpusat pada manusia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card" style="background-color: #363636;">
                <div class="card-body" style="background-color: #1e1e1e; color: #cccccc;">
                    <h6 class="mb-2 text-primary">Detail Pribadi</h6>
                    <form method="POST" action="{{ route('user_profile.update', Auth::user()->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="fullName" name="nama" value="{{ Auth::user()->nama }}" placeholder="Masukkan nama lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" id="eMail" name="alamat" value="{{ Auth::user()->email }}" placeholder="Masukkan alamat email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="eMail" name="alamat" value="{{ Auth::user()->profile->alamat }}" placeholder="Masukkan alamat email">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Telepon</label>
                                    <input type="text" class="form-control" id="phone" name="nomor_telepon" value="{{ Auth::user()->profile->nomor_telepon }}" placeholder="Masukkan nomor telepon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ Auth::user()->profile->tanggal_lahir }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="Male" {{ Auth::user()->profile->jenis_kelamin == 'Male' ? 'selected' : '' }}>Pria</option>
                                        <option value="Female" {{ Auth::user()->profile->jenis_kelamin == 'Female' ? 'selected' : '' }}>Wanita</option>
                                        <option value="Other" {{ Auth::user()->profile->jenis_kelamin == 'Other' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" id="cancel" name="cancel" class="btn btn-secondary">Batal</button>
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
