@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('content')
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
                <form method="POST" action="{{ route('barang.update', $data->idBarang) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="name">Nama Barang</label>
                        <div class="col-md-7">
                            <input value="{{$data->NamaBarang}}" type="text" id="name" class="form-control "
                                name="NamaBarang" placeholder="Nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="email">Harga Barang</label>
                        <div class="col-md-7">
                            <input value="{{$data->HargaBarang}}" type="text" id="email" class="form-control"
                                name="HargaBarang" placeholder="Harga" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="email">Stok Barang</label>
                        <div class="col-md-7">
                            <input value="{{$data->StokBarang}}" type="number" id="email" class="form-control "
                                name="StokBarang"  placeholder="Stok" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="type">Jenis Barang</label>
                        <div class="col-md-7">
                            <select class="select2  @error('type') is-invalid @enderror" name="JenisBarang"
                                id="type" autocomplete="type" autofocus required>
                                <option value=""></option>
                                <option value="kaos">Kaos</option>
                                <option value="sepatu">Sepatu</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label font-weight-semibold"
                            for="foto">Gambar</label>
                        <div class="col-md-7">
                            <input type="file"  class="form-control "
                                name="foto"  placeholder="Stok" required>
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
@endsection