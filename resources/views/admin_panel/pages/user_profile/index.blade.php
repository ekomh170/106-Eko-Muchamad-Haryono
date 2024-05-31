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
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                                        </div>
                                        <div class="col-lg-6 px-xl-10">
                                            <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                <h3 class="h2 text-white mb-0">John mark Doe Kyzer</h3>
                                                <span class="text-primary">Coach</span>
                                            </div>
                                            <ul class="list-unstyled mb-1-9" style="color: #3FFF00;">
                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Position:</span> Coach</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Experience:</span> 10 Years</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Email:</span> edith@mail.com</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Website:</span> www.example.com</li>
                                                <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600" style="color: #3FFF00;">Phone:</span> 507 - 541 - 4567</li>
                                            </ul>
                                            <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                                <li><a href="#!"><i class="ti-twitter-alt" style="color: #3FFF00;"></i></a></li>
                                                <li><a href="#!"><i class="ti-facebook" style="color: #3FFF00;"></i></a></li>
                                                <li><a href="#!"><i class="ti-pinterest" style="color: #3FFF00;"></i></a></li>
                                                <li><a href="#!"><i class="ti-instagram" style="color: #3FFF00;"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div>
                                <span class="section-title text-primary mb-3 mb-sm-4" style="color: #3FFF00;">About Me</span>
                                <p style="color: #3FFF00;">Edith is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p class="mb-0" style="color: #3FFF00;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="mb-4 mb-sm-5">
                                        <span class="section-title text-primary mb-3 mb-sm-4" style="color: #3FFF00;">Skill</span>
                                        <div class="progress-text">
                                            <div class="row" style="color: #3FFF00;">
                                                <div class="col-6">Driving range</div>
                                                <div class="col-6 text-end">80%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                        </div>
                                        <div class="progress-text">
                                            <div class="row" style="color: #3FFF00;">
                                                <div class="col-6">Short Game</div>
                                                <div class="col-6 text-end">90%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                        </div>
                                        <div class="progress-text">
                                            <div class="row" style="color: #3FFF00;">
                                                <div class="col-6">Side Bets</div>
                                                <div class="col-6 text-end">50%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                        </div>
                                        <div class="progress-text">
                                            <div class="row" style="color: #3FFF00;">
                                                <div class="col-6">Putting</div>
                                                <div class="col-6 text-end">60%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="section-title text-primary mb-3 mb-sm-4" style="color: #3FFF00;">Education</span>
                                        <p style="color: #3FFF00;">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                        <p class="mb-1-9" style="color: #3FFF00;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
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