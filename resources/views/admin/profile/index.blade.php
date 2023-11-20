@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Up date Profile!</h2>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="{{ route('admin.profile.update') }}" class="needs-validation"
                            novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div>
                                            <img style="width:100px;height:50" src="{{ asset(Auth::user()->image) }}"
                                                alt="">
                                        </div>
                                        <label>Profile image</label>
                                        <input type="file" class="form-control" name="image"required="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ Auth::user()->name }}" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>User Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ Auth::user()->email }}" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
         <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <form method="post" action="{{ route('admin.profile.update.updatePassword') }}"
                        class="needs-validation" novalidate="">
                        @csrf
                        <div class="card-header">
                            <h4>Edit Password</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Current Passowrd</label>
                                    <input type="password" class="form-control" name="current_password" required="">
                                    <label>New Passowrd</label>
                                    <input type="password" class="form-control" name="password" required="">
                                    <label>Confirm Passowrd</label>
                                    <input type="password" class="form-control" name="password_confirmation" required="">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Update Pass</button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
        </div>
    </section>
@endsection
