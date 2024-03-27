@extends('layouts.app')

@section('title', 'Assets')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Assets</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Assets</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Asset Item</h4>
            <div class="ml-auto">
                <a href="{{ route('assets.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add Item</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <td>Kode Asset</td>
                            <td>Nama Barang</td>
                            <td>Harga</td>
                            <td>Lokasi</td>
                            <td>Pemakai</td>
                            <td>Status</td>
                            <td>Gambar</td>
                            <td>Dibuat</td>
                            <td>Update Terakhir</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $assets as $asset )
                        <tr>
                            <td>{{ $asset->code }}</td>
                            <td>{{ $asset->name }}</td>
                            <td>{{ $asset->price }}</td>
                            <td>{{ $asset->location }}</td>
                            <td>{{ $asset->user }}</td>
                            <td>{{ $asset->status }}</td>
                            <td class="text-center">
                                <img src="{{ asset('storage/asset/' . $asset->image) }}" alt="Asset Image" class="rounded" style="width: 150px">
                            </td>
                            <td>{{ $asset->created_at }}</td>
                            <td>{{ $asset->updated_at }}</td>
                            <td>
                                <form action="{{ route('assets.destroy', $asset->id) }}" method="POST">
                                    <a href="{{ route('assets.show', $asset->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('assets.edit', $asset->id) }}" class="btn btn-sm btn-success">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Asset belum Tersedia.
                        </div>
                        @endforelse
                    </tbody>
                    {{ $assets->links() }}
                </table>
            </div>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
</section>


@stop
