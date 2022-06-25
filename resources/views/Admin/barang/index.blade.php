@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('content')
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Data Barang</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <span class="breadcrumb-item"><i class="anticon anticon-appstore m-r-5"></i>Master Data</span>
                <span class="breadcrumb-item active">Data User</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <h4>Data User</h4>
                <div class="row justify-content-end">
                    <a href="{{route('barang.create')}}" class="btn btn-secondary btn-sm btn-tone m-r-5">Tambah Data</a>
                </div>
            </div>
            <div class="m-t-25">
                <table id="data-table" class="table table-hover table-responsive-lg text-center overflow-auto">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Stok Barang</th>
                            <th>Jenis Barang</th>
                            <th>Foto</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $k)
                        <tr>
                            <td>1</td>
                            <td>{{$k->NamaBarang}}</td>
                            <td>{{$k->HargaBarang}}</td>
                            <td>{{$k->StokBarang}}</td>
                            <td>{{$k->JenisBarang}}</td>
                            <td><img src="{{asset('public/barang/'. $k->foto)}}" style="width: 25%;" /></td>
                            <td>
                                <a href="{{ route('barang.edit', ['idBarang' => $k->idBarang]) }}">Edit</a>
                                |
                                <a href="{{route('barang.destroy',$k->idBarang)}}"
                                                class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
