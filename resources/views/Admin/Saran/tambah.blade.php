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
                <span class="breadcrumb-item active">Saran</span>
            </nav>
        </div>
    </div>
    <div class="card">
    <div class="card-body">
            <h4>Tambah Saran</h4>
            <div class="m-t-25 container-fluid">
                <form method="POST" action="{{ route('saran.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="name">Nama</label>
                        <div class="col-md-7">
                            <input type="text" id="NamaUser" class="form-control @error('NamaUser') is-invalid @enderror"
                                name="NamaUser" value="{{old('NamaUser')}}" placeholder="NamaUser" required>
                            @error('NamaUser')
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
                            for="name">Saran</label>
                        <div class="col-md-7">
                            <input type="text" id="saran" class="form-control @error('saran') is-invalid @enderror"
                                name="saran" value="{{old('saran')}}" placeholder="Saran" required>
                            @error('saran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                        <a href="{{route('saran.index')}}" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->
@endsection
