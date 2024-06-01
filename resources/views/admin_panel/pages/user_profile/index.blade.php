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
                                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <img src="{{ Auth::user()->profile->avatar ?? 'https://bootdey.com/img/Content/avatar/avatar7.png' }}" alt="...">
                                        </div>
                                        <div class="col-lg-6 px-xl-10">
                                            <div class="d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded" style="background-color: #3FFF00;">
                                                <h3 class="h2 text-white mb-0">{{ Auth::user()->nama }}</h3>
                                                <span class="text-primary">{{ Auth::user()->role->nama }}</span>
                                            </div>
                                            <ul class="list-unstyled mb-1-9" style="color: #3FFF00;">

                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Position:</span> {{ Auth::user()->role->nama }}</li>

                                                <li class="display-28 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Phone:</span> {{ Auth::user()->profile->nomor_telepon ?? 'N/A' }}</li>

                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Email:</span> {{ Auth::user()->profile->alamat }}</li>
                                                
                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Tanggal Lahir:</span> {{ Auth::user()->profile->tanggal_lahir ?? 'N/A' }} </li>
                                                
                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Gender :</span> {{ Auth::user()->profile->jenis_kelamin ?? 'N/A' }}</li>
                                              
                                            </ul>
                                            <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                                <li><a href="#!"><i class="ti-twitter-alt" style="color: #3FFF00;"></i></a></li>
                                                <li><a href="#!"><i class="ti-facebook" style="color: #3FFF00;"></i></a></li>
                                                <li><a href="#!"><i class="ti-pinterest" style="color: #3FFF00;"></i></a></li>
                                                <li><a href="#!"><i class="ti-instagram" style="color: #3FFF00;"></i></a></li>
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
