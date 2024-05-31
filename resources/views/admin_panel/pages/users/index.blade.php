@extends('admin_panel.layouts.master')

@section('title', 'Data Users')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="mb-0">Daftar Users</h6>
                    <a href="{{ route('Users.create') }}" class="btn btn-success">Tambah Data</a>
                </div>
                
                <!-- Search and Filter Bar -->
                <div class="d-flex justify-content-between mb-3">
                    <form method="GET" action="{{ route('Users.index') }}" class="d-flex">
                        <input type="text" class="form-control me-2" name="search" id="search" placeholder="Cari users..." value="{{ request('search') }}">
                        <select name="sort" class="form-select me-2">
                            <option value="">Sort By</option>
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Lama</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
                
                <!-- Tabel Users -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="usersTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Email Verified At</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $index => $user)
                                <tr>
                                    <th scope="row">{{ $users->firstItem() + $index }}</th>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email_verified_at }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('Users.show', $user->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('Users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('Users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
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
                
                <!-- Pagination Links -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $users->links('admin_panel.partials.pagination') }}
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
