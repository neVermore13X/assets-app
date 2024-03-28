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
                <table class="table table-bordered" id="dataTables">
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

                                <a href="{{ route('assets.show', $asset->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('assets.edit', $asset->id) }}" class="btn btn-sm btn-success">EDIT</a>
                                <form action="{{ route('assets.destroy', $asset->id) }}" method="POST" id="hapusForm">
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
                </table>
                <div>
                    {{ $assets->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        Footer
    </div>
    </div>
</section>

@stop

@if(Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}")

</script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('hapusForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Menghentikan pengiriman formulir secara default

            Swal.fire({
                title: 'Apakah Anda yakin?'
                , text: "Data akan dihapus secara permanen!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#d33'
                , cancelButtonColor: '#3085d6'
                , confirmButtonText: 'Ya, hapus!'
                , cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi, formulir akan dikirim
                    event.target.submit(); // Mengirim formulir
                }
            });
        });
    });

</script>

<script>
    new DataTable('#dataTables', {
        layout: {
            topStart: {
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            }
        }
    });

</script>
