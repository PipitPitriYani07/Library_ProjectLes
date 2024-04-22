<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PeminjamController extends Controller
{
    public function indexx(Request $request){
        return view('page.peminjam.tambahpeminjam');
    }
    public function index(Request $request){
        $data = [
            'datapeminjam'      => User::where('role','peminjam')->get()
        ];
        return view('page.peminjam.indexpeminjam', $data);
    }

    public function datapeminjam(Request $request){
        $request->validate([
            'name'                => 'required',
            'email'               => 'required',
            'jenis_kelamin'       => 'required',
            'photos'              => 'required|max:1024',
            'password'            => 'required'

        ]);
        // Untuk membuat nama photo
        $file_foto                = $request->file('photos');
        $extensi_foto             = $file_foto->getClientOriginalExtension();
        $nama_foto                = 'buku_'.date('dmyhis').'.'.$extensi_foto;
        $file_foto->move(public_path('/imagebuku'), $nama_foto);
        $dataStore = [
        'name'                  => $request->name,
        'email'                 => $request->email,
        'password'              => Hash::make($request->password),
        'jenis_kelamin'         => $request->jenis_kelamin,
        'role'                  => 'Peminjam',
        'picture'               => $nama_foto

        ];
        User::create($dataStore);
        return redirect('/indexpeminjam');
    }
    public function edit(Request $request, $id){
        $data = [
            'datapeminjam'      => User::where('id', $id)->first()


        ];
        return view('page.peminjam.editpeminjam', $data);
    }
    public function ubah(Request $request, $id){
        $request->validate([
            'name'                => 'required',
            'email'               => 'required',
            'jenis_kelamin'       => 'required',
            'photos'              => 'required|max:1024',
            'password'            => 'required'

        ]);
        $file_foto                = $request->file('photos');
        $extensi_foto             = $file_foto->getClientOriginalExtension();
        $nama_foto                = 'buku_'.date('dmyhis').'.'.$extensi_foto;
        $file_foto->move(public_path('/imagebuku'), $nama_foto);
        $dataStore = [
        'name'                  => $request->name,
        'email'                 => $request->email,
        'password'              => Hash::make($request->password),
        'jenis_kelamin'         => $request->jenis_kelamin,
        'role'                  => 'Peminjam',
        'picture'               => $nama_foto

        ];
        User::where('id', $id)->update($dataStore);
        return redirect('/indexpeminjam');
    }
    public function hapus(Request $request, $id){
        User::where('id', $id)->delete();
        return redirect('/indexpeminjam');
    }
}
