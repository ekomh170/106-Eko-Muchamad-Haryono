@extends('admin_panel.layouts.master')

@section('title', 'Edit User')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xl-8">
            <div class="card bg-secondary text-white rounded p-4">
                <div class="card-header text-center">
                    <h4 class="card-title mb-0">Form Edit User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label"><i class="fas fa-user"></i> Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->nama }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><i class="fas fa-lock"></i> Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Baru (Kosongkan jika tidak ingin mengubah)">
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

@endsection
