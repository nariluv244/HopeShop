@extends('layouts.admin.admin')
@section('title', 'Data User')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Data User</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <span class="breadcrumb-item"><i class="anticon anticon-appstore m-r-5"></i>Master Data</span>
                <span class="breadcrumb-item active">Data User</span>
            </nav>
        </div>
    </div>
    <div class="card">
    <div class="card-body">
            <h4>Tambah Data</h4>
            <div class="m-t-25 container-fluid">
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="name">Nama</label>
                        <div class="col-md-7">
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{old('name')}}" placeholder="Nama" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="email">Email</label>
                        <div class="col-md-7">
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{old('email')}}" placeholder="Email" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="type">Tipe</label>
                        <div class="col-md-7">
                            <select class="select2  @error('type') is-invalid @enderror" name="type"
                                id="type" autocomplete="type" autofocus required>
                                <option value=""></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>

                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="font-weight-semibold" for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control col-md-11 @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-5">
                            <label class="font-weight-semibold" for="confirmPassword">Confirm
                                Password:</label>
                            <input id="confirmPassword" type="password" class="form-control col-md-9"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{route('user.index')}}" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->
@endsection
