@extends('layout.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables Buku
            </h6>
            <br>
            @if (auth()->user()->role == "Pengelola")
            <a href="/tambahbuku" class="btn btn-primary pull-right">Tambah Buku</a>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Gambar</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Gambar</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($buku as $item )
                        <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->judul_buku }}</td>
                        <td><img src="/imagebuku/{{ $item->pictures }}" alt="" width="50px"></td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit->nama_penerbit }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>{{ optional ($item->kategori)->nama_kategori }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            @if (auth()->user()->role=="Pengelola")
                            <a href="/buku/edit/{{ $item->id }}">Edit</a>
                            <a href="/hapusbuku/{{ $item->id }}">Hapus</a>
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

