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
                Form Input Data Buku
            </h6>
            <br>
            <a href="/indexbuku" class="btn btn-warning pull-right">Kembali</a>
        </div>
        <div class="card-body">
            <form action="/ubahbuku/{{ $databuku->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <small>Judul Buku</small><br>
            <input type="text" name="judul_buku" value="{{ $databuku->judul_buku }}" class="form form-control">
            @error('judul_buku')
                <small>{{$message}}</small><br>
            @enderror
            <small>Penulis</small> <br>
            <input type="text" name="penulis" value="{{ $databuku->penulis }}" class="form form-control">
            @error('penulis')
                <small>{{$message}}</small> <br>
             @enderror
             <small>Penerbit</small> <br>
            <select name="penerbit_id" id="penerbit_id">
            <option value="">-- Silahkan Pilih Penerbit --</option>
            @foreach ($penerbit as $item)
            <option value="{{ $item->id}}">{{ $item->nama_penerbit }} </option>
            @endforeach
            </select> <br>
            <small>Tahun Terbit</small> <br>
            <input type="text" name="tahun_terbit" value="{{ $databuku->tahun_terbit }}" class="form form-control" >
            @error('tahun_terbit')
                <small>{{$message}}</small><br>
             @enderror
            <small>Kategori</small> <br>
            <select name="kategori_id" id="kategori_id">
            <option value="">-- Silahkan Pilih Kategori --</option>
            @foreach ($kategori as $item)
            <option value="{{ $item->id}}">{{ $item->nama_kategori }} </option>
            @endforeach
            </select> <br>
            <input type="file" name="photos"> <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
