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
            <form action="/bukus" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form from-grup">
                <span>Judul Buku</span> <br>
                <input type="text" name="judul_buku" class="form form-control" value="{{old('judul_buku')}}"> <br>

                @error('judul_buku')
                        <small>{{$message}}</small><br>
                @enderror
                </div>
                <div class="form from-grup">
                <span>Penulis</span> <br>
                <input type="text" name="penulis" class="form form-control" value="{{old('penulis')}}"> <br>
                @error('penulis')
                        <small>{{$message}}</small> <br>
                @enderror
                </div>
                <div class="form from-grup">
                <span>Penerbit</span> <br>
                <select name="penerbit_id" id="penerbit_id">
                    <option value="">-- Silahkan Pilih Penerbit --</option>
                @foreach ($penerbit as $item)
                   <option value="{{ $item->id}}">{{ $item->nama_penerbit }}</option>
                @endforeach
                </div>
                </select> <br>
                <div class="form from-grup">
                <span>Tahun Terbit</span> <br>
                <input type="text" name="tahun_terbit" class="form form-control" value="{{old('tahun_terbit')}}"> <br>
                </div>
                @error('tahun_terbit')
                        <small>{{$message}}</small><br>
                @enderror
                <div class="form from-grup" >
                <span>Kategori</span> <br>
                <select name="kategori_id" id="kategori_id">
                    <option value="" >-- Silahkan Pilih Kategori --</option>
                    @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                @endforeach
                </div>
                </select> <br>
                <input type="file" name="photos"> <br>
                @if (auth()->user()->role == "Pengelola")
                <button type="submit">Simpan</button>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
