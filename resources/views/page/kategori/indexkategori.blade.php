@extends('layout.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kategori Buku</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables Kategori
            </h6>
            <br>
            @if (auth()->user()->role == "Pengelola")
            <a href="/tambahkategori" class="btn btn-primary pull-right">Tambah Kategori</a>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($kategori as $item )
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_kategori}}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                @if (auth()->user()->role == "Pengelola")
                                <a href="/kategori/edit/{{ $item->id }}">Edit</a>
                                <a href="/hapuskategori/{{ $item->id }}">Hapus</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
