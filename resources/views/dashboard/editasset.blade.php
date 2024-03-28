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
                    <li class="breadcrumb-item"><a href="#">Edit Item</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Edit Item <b>{{ $asset->code }}</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('assets.update' , $asset->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Kode Asset</label>
                            <input type="text" name="kode_asset" value="{{ old('code',$asset->code) }}" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Nama Asset</label>
                            <input type="text" name="nama_asset" value="{{ old('name',$asset->name) }}" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Harga Asset</label>
                            <input type="text" name="harga_asset" value="{{ old('price',$asset->price) }}" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Lokasi Asset</label>
                            <input type="text" name="lokasi_asset" value="{{ old('location',$asset->location) }}" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Pemakai Asset</label>
                            <input type="text" name="user_asset" value="{{ old('user',$asset->user) }}" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Kode Asset">Status Asset</label>
                            <input type="text" name="status_asset" value="{{ old('status',$asset->status) }}" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Kode Asset">Gambar Asset : </label>
                            {{-- <img src="{{ asset('storage/asset/' . $asset->image) }}" alt="Asset Image" class="rounded" style="width: 250px"> --}}
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
