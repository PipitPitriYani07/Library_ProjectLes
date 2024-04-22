<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function buku(Request $request){
        $data = [
            'kategori'      => Kategori::all(),
            'penerbit'      => Penerbit::all()
        ];
        return view('page.buku.tambahbuku', $data);
    }

    public function data(Request $request){
        // dd(Buku::where('id', 2)->first());
        $data = [
            'buku'      => Buku::with(['kategori'])->get()
        ];
        return view('page.buku.indexbuku', $data);
    }



    public function databuku(Request $request){
        $request->validate([
            'judul_buku'          => 'required',
            'penulis'             => 'required',
            'penerbit_id'         => 'required',
            'tahun_terbit'        => 'required',
            'kategori_id'         => 'required',
            'photos'              => 'required|max:1024'
        ]);
        // Untuk membuat nama photo
        $file_foto                = $request->file('photos');
        $extensi_foto             = $file_foto->getClientOriginalExtension();
        $nama_foto                = 'buku_'.date('dmyhis').'.'.$extensi_foto;
        $file_foto->move(public_path('/imagebuku'), $nama_foto);
        $dataStore = [
        'judul_buku'              => $request->judul_buku,
        'penulis'                 => $request->penulis,
        'penerbit_id'             => $request->penerbit_id,
        'tahun_terbit'            => $request->tahun_terbit,
        'kategori_id'             => $request->kategori_id,
        'status'                  => 'Aktif',
        'pictures'                => $nama_foto

        ];
        Buku::create($dataStore);
        return redirect('/indexbuku');
    }
    public function edit(Request $request, $id){
        $data =[
            'databuku'  => Buku::where('id', $id)->first(),
            'kategori'  => Kategori::all(),
            'penerbit'  => Penerbit::all()
        ];
        return view('page.buku.editbuku', $data);
    }

    public function ubah(Request $request, $id){
        $request->validate([
            'judul_buku'          => 'required',
            'penulis'             => 'required',
            'penerbit_id'         => 'required',
            'tahun_terbit'        => 'required',
            'kategori_id'         => 'required',
            'photos'              => 'required|max:1024'
        ]);
        $file_foto                = $request->file('photos');
        $extensi_foto             = $file_foto->getClientOriginalExtension();
        $nama_foto                = 'buku_'.date('dmyhis').'.'.$extensi_foto;
        $file_foto->move(public_path('/imagebuku'), $nama_foto);
        $dataStore = [
        'judul_buku'              => $request->judul_buku,
        'penulis'                 => $request->penulis,
        'penerbit_id'             => $request->penerbit_id,
        'tahun_terbit'            => $request->tahun_terbit,
        'kategori_id'             => $request->kategori_id,
        'status'                  => 'Aktif',
        'pictures'                => $nama_foto
        ];
           Buku::where('id', $id)->update($dataStore);
           return redirect('/indexbuku');
    }
    public function hapus(Request $request, $id){
        Buku::where('id', $id)->delete();
        return redirect('/indexbuku');
    }
}


