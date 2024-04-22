<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/penerbit2" method="POST">
    @csrf
    <small>Nama Penerbit</small> <br>
    <input type="text" name="nama_penerbit" value="{{old('nama_penerbit')}}"> <br>
    @error('nama_penerbit')
            <small>{{$message}}</small><br>
    @enderror
    <small>Keterangan</small> <br>
    <input type="text" name="keterangan" value="{{old('keterangan')}}"> <br>
    @error('keterangan')
            <small>{{$message}}</small><br>
    @enderror
    <button type="submit">Simpan</button>
    </form>
</body>
</html>
