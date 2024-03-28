@extends('layouts.app')

@section('title', 'Lihat Asset')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Assets</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Lihat Item</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Lihat Item <b>{{ $asset->code }}</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('assets.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Kode Asset</label>
                            <input type="text" name="kode_asset" value="{{ $asset->code }}" id="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Nama Asset</label>
                            <input type="text" name="nama_asset" value="{{ $asset->name }}" id="" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Harga Asset</label>
                            <input type="text" name="harga_asset" value="{{ $asset->price }}" id="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Lokasi Asset</label>
                            <input type="text" name="lokasi_asset" value="{{ $asset->location }}" id="" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Pemakai Asset</label>
                            <input type="text" name="user_asset" value="{{ $asset->user }}" id="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Status Asset</label>
                            <input type="text" name="status_asset" value="{{ $asset->status }}" id="" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Kode Asset">Gambar Asset : </label>
                            <img src="{{ asset('storage/asset/' . $asset->image) }}" alt="Asset Image" class="rounded" style="width: 250px">
                        </div>
                    </div>
                </div>
        </div>
</section>

@stop
