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
                Form Input Data Kategori
            </h6>
            <br>
            <a href="/indexkategori" class="btn btn-warning pull-right">Kembali</a>
        </div>
        <div class="card-body">
            <form action="/ubahkategori/{{ $datakategori->id }}" method="POST">
                @csrf
                <small>Nama Kategori</small> <br>
                <input type="text" name="nama_kategori" value="{{ $datakategori->nama_kategori }}"  class="form form-control"> <br>
                @error('nama_kategori')
                        <small>{{$message}}</small><br>
                @enderror
                <small>Keterangan</small> <br>
                <input type="text" name="keterangan" value="{{ $datakategori->keterangan }}" class="form form-control"> <br>
                @error('keterangan')
                        <small>{{$message}}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
