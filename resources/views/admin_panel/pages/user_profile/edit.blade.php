@extends('admin_panel.layouts.master')

@section('title', 'Edit Profile User')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-lg-3">
            <div class="card" style="background-color: #363636;">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin"> --}}
                            </div>
                            <h5 class="user-name" style="color: #cccccc;">Yuki Hayashi</h5>
                            <h6 class="user-email" style="color: #cccccc;">yuki@Maxwell.com</h6>
                        </div>
                        <div class="about" style="color: #cccccc;">
                            <h5>About</h5>
                            <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card" style="background-color: #363636;">
                <div class="card-body" style="background-color: #1e1e1e; color: #cccccc;">
                    <h6 class="mb-2 text-primary">Personal Details</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="website">Website URL</label>
                                <input type="url" class="form-control" id="website" placeholder="Website url">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Street">Street</label>
                                <input type="name" class="form-control" id="Street" placeholder="Enter Street">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ciTy">City</label>
                                <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sTate">State</label>
                                <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="zIp">Zip Code</label>
                                <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
