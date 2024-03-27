@extends('layouts.app')

@section('title', 'Buat Asset')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Assets</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tambah Item</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Tambah Asset Baru</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('assets.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Kode Asset</label>
                            <input type="text" name="kode_asset" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Nama Asset</label>
                            <input type="text" name="nama_asset" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Harga Asset</label>
                            <input type="text" name="harga_asset" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Lokasi Asset</label>
                            <input type="text" name="lokasi_asset" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Pemakai Asset</label>
                            <input type="text" name="user_asset" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Status Asset</label>
                            <input type="text" name="status_asset" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Kode Asset">Gambar Asset</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-item-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </div>
            </form>
        </div>
</section>


@stop
