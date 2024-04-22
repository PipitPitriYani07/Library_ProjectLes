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
                Form Input Data Kategori Buku
            </h6>
            <br>
            <a href="/indexkategori" class="btn btn-warning pull-right">Kembali</a>
        </div>
        <div class="card-body">
            <form action="/kategoris" method="POST">
                @csrf
                <div class="form from-grup">
                <span>Nama Kategori</span>
                <input type="text" name="nama_kategori" class="form form-control" value="{{old('nama_kategori')}}"> <br>
                </div>
                @error('nama_kategori')
                        <small>{{$message}}</small><br>
                @enderror
                <div class="form from-grup">
                <span>Keterangan</span>
                <input type="text" name="keterangan" class="form form-control" value="{{old('keterangan')}}"> <br>
                </div>
                @error('keterangan')
                        <small>{{$message}}</small><br>
                @enderror
                @if (auth()->user()->role == "Pengelola")
                <button type="submit" class="btn btn-primary">Simpan</button>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
