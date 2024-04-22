@extends('layout.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Data Penerbit</h1>
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
            <form action="/ubahpenerbit/{{ $datapenerbit->id }}" method="POST">
                @csrf
                <small>Nama Penerbit</small> <br>
                <input type="text" name="nama_penerbit" value="{{ $datapenerbit->nama_penerbit }}" class="form form-control"> <br>
                <small>Keterangan</small> <br>
                <input type="text" name="keterangan" value="{{ $datapenerbit->keterangan }}" class="form form-control"> <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
