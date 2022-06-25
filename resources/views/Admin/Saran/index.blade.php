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
            <div class="container-fluid">
                <h4>Saran</h4>
                <div class="row justify-content-end">
                    <a href="/saran/tambah" class="btn btn-secondary btn-sm btn-tone m-r-5">Tambah Saran</a>
                </div>
            </div>
            <div class="m-t-25">
                <table id="data-table" class="table table-hover table-responsive-lg text-center overflow-auto">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Saran</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($saran as $p)
		    <tr>
            <td>{{$loop->iteration}}</td>    
			<td>{{ $p->NamaUser}}</td>
			<td>{{ $p->Email}}</td>
			<td>{{ $p->Saran}}</td>
			<td>
				<a href="/saran/hapus/{{ $p->idSaran}}">Hapus</a>
			</td>
		    </tr>
		            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->
@endsection
