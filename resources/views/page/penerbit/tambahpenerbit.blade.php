@extends('layout.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Penerbit</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Input Data Penerbit
            </h6>
            <br>
            <a href="/indexpenerbit" class="btn btn-warning pull-right">Kembali</a>
        </div>
        <div class="card-body">
            <form action="/penerbit2" method="POST">
                @csrf
                <div class="form from-grup">
                <snap>Nama Penerbit</snap> <br>
                <input type="text" name="nama_penerbit" class="form form-control" value="{{old('nama_penerbit')}}"> <br>
                </div>
                @error('nama_penerbit')
                        <small>{{$message}}</small><br>
                @enderror
                <div class="form from-grup">
                <snap>Keterangan</snap> <br>
                <input type="text" name="keterangan" class="form form-control" value="{{old('keterangan')}}"> <br>
                </div>
                @error('keterangan')
                        <small>{{$message}}</small><br>
                @enderror
                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
