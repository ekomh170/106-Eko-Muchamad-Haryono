@extends('admin_panel.layouts.master')

@section('title', 'Edit Role')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xl-8">
            <div class="card bg-secondary text-white rounded p-4">
                <div class="card-header text-center">
                    <h4 class="card-title mb-0">Form Edit Role</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label"><i class="fas fa-id-badge"></i> Nama Role</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $role->nama }}" required>
                        </div>
                        <!-- You can add additional fields if needed -->
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
