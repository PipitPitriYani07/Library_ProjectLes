<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategoris(Request $request){
        return view('page.kategori.tambahkategori');
    }

    public function kategori(Request $request){
        $request->validate([
         'nama_kategori'        => 'required',
         'keterangan'           => 'required'
        ]);

        $dataStore = [
        'nama_kategori'          => $request->nama_kategori,
        'keterangan'             => $request->keterangan,
        'status'                 => 'Aktif'
        ];
        Kategori::create($dataStore);
        return redirect('/indexkategori');
    }
    public function data(Request $request){
        $data = [
            'kategori'      => Kategori::all()
        ];
        return view('page.kategori.indexkategori', $data);
    }
    public function edit(Request $request, $id){
        $data =[
            'datakategori'  => Kategori::where('id', $id)->first()
        ];
        return view('page.kategori.editkategori', $data);
    }
    public function ubah(Request $request, $id){
        $request->validate([
            'nama_kategori'        => 'required',
            'keterangan'           => 'required'
           ]);

           $dataStore = [
           'nama_kategori'          => $request->nama_kategori,
           'keterangan'             => $request->keterangan,
           'status'                 => 'Aktif'
           ];
           Kategori::where('id', $id)->update($dataStore);
           return redirect('/indexkategori');
    }
    public function hapus(Request $request, $id){
        Kategori::where('id', $id)->delete();
        return redirect('/indexkategori');
    }
}
