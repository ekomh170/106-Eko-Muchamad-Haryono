@extends('admin_panel.layouts.master')

@section('title', 'Profile User')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <section class="bg-black">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div class="card card-style1 border-0" style="background-color: gray;">
                                <div class="card-body p-4">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <img src="{{ Auth::user()->profile->avatar ?? 'https://bootdey.com/img/Content/avatar/avatar7.png' }}" alt="User Avatar" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 px-xl-10">
                                            <div class="py-2 px-3 mb-3 rounded" style="background-color: #3FFF00;">
                                                <h3 class="h2 text-white mb-0">{{ Auth::user()->nama }}</h3>
                                                <span class="text-primary">{{ Auth::user()->role->nama }}</span>
                                            </div>
                                            <ul class="list-unstyled mb-3" style="color: #3FFF00;">
                                                <li class="mb-3">
                                                    <span class="text-secondary font-weight-bold" style="color: #3FFF00;">Position:</span> {{ Auth::user()->role->nama }}
                                                </li>
                                                <li class="mb-3">
                                                    <span class="text-secondary font-weight-bold" style="color: #3FFF00;">Phone:</span> {{ Auth::user()->profile->nomor_telepon ?? 'N/A' }}
                                                </li>
                                                <li class="mb-3">
                                                    <span class="text-secondary font-weight-bold" style="color: #3FFF00;">Email:</span> {{ Auth::user()->profile->alamat }}
                                                </li>
                                                <li class="mb-3">
                                                    <span class="text-secondary font-weight-bold" style="color: #3FFF00;">Tanggal Lahir:</span> {{ Auth::user()->profile->tanggal_lahir ?? 'N/A' }}
                                                </li>
                                                <li class="mb-3">
                                                    <span class="text-secondary font-weight-bold" style="color: #3FFF00;">Gender:</span> {{ Auth::user()->profile->jenis_kelamin ?? 'N/A' }}
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled d-flex">
                                                <li class="me-3"><a href="#" class="text-success"><i class="ti-twitter-alt"></i></a></li>
                                                <li class="me-3"><a href="#" class="text-success"><i class="ti-facebook"></i></a></li>
                                                <li class="me-3"><a href="#" class="text-success"><i class="ti-pinterest"></i></a></li>
                                                <li class="me-3"><a href="#" class="text-success"><i class="ti-instagram"></i></a></li>
                                            </ul>
                                            <div class="mt-3">
                                                <a href="{{ url('AdminPanel/EditProfile/edit') }}" class="btn btn-primary" style="background-color: #3FFF00; border-color: #3FFF00;">Edit Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
