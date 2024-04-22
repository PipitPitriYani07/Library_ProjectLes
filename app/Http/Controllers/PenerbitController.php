<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function penerbit(Request $request){
        return view('page.penerbit.tambahpenerbit');
    }

    public function data(Request $request){
        $request->validate([
         'nama_penerbit'        => 'required',
         'keterangan'           => 'required'
        ]);

        $dataStore = [
        'nama_penerbit'          => $request->nama_penerbit,
        'keterangan'             => $request->keterangan,
        'status'                 => 'Aktif'
        ];
        Penerbit::create($dataStore);
        return redirect('/indexpenerbit');
    }

    public function datapenerbit(Request $request){
        $data = [
            'penerbit'      => Penerbit::all()
        ];
        return view('page.penerbit.indexpenerbit', $data);
    }

    public function edit(Request $request, $id){
        $data =[
            'datapenerbit'  => Penerbit::where('id', $id)->first(),
        ];
        return view('page.penerbit.editpenerbit', $data);
    }
    public function ubah(Request $request, $id){
        $request->validate([
            'nama_penerbit'        => 'required',
            'keterangan'           => 'required'
           ]);

           $dataStore = [
           'nama_penerbit'          => $request->nama_penerbit,
           'keterangan'             => $request->keterangan,
           'status'                 => 'Aktif'
           ];
           Penerbit::where('id', $id)->update($dataStore);
           return redirect('/indexpenerbit');
    }
    public function hapus(Request $request, $id){
        Penerbit::where('id', $id)->delete();
        return redirect('/indexpenerbit');
    }
}
