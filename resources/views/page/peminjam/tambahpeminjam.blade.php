@extends('layout.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Peminjam</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Input Data Peminjam
            </h6>
            <br>
            <a href="/indexpeminjam" class="btn btn-warning pull-right">Kembali</a>
        </div>
        <div class="card-body">
            <form action="/peminjam" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form from-grup">
                <span>Nama Peminjam</span>
                <input type="text" name="name" class="form form-control" value="{{old('name')}}"> <br>
                </div>
                @error('name')
                        <small>{{$message}}</small><br>
                @enderror
                <div class="form from-grup">
                <span>Email</span>
                <input type="text" name="email" class="form form-control" value="{{old('keterangan')}}"> <br>
                </div>
                @error('email')
                        <small>{{$message}}</small><br>
                @enderror
                <div class="form from-grup">
                <span>Password</span> <br>
                <input type="password" name="password" id="" class="form form-control"> <br>
                </div>
                <div class="form from-grup">
                <span>Jenis Kelamin</span> <br>
                <input type="radio" name="jenis_kelamin" id="" value="Laki-laki" {{old('jenis_kelamin')=='Laki-laki' ? 'checked' : ''}}>Laki-laki
                <input type="radio" name="jenis_kelamin" id="" value="Perempuan" {{old('jenis_kelamin')=='Perempuan' ? 'checked' : ''}}>Perempuan <br>
                @error('jenis_kelamin')
                        <small>{{$message}}</small><br>
                @enderror
                </div>
                <span>Gambar</span> <br>
                <input type="file" name="photos"> <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
