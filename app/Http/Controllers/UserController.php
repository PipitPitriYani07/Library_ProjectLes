<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexx(Request $request){
        return view('page.user.tambahpengelola');
    }
    public function index(Request $request){
        $data = [
            'datapengelola'      => User::where('role','pengelola')->get()
        ];
        return view('page.user.indexpengelola', $data);
    }

    public function datapengelola(Request $request){
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
        'jenis_kelamin'         => $request->jenis_kelamin,
        'role'                  => 'Pengelola',
        'picture'               => $nama_foto,
        'password'              => Hash::make($request->password)

        ];
        User::create($dataStore);
        return redirect('/indexpengelola');
    }
    public function edit(Request $request, $id){
        $data = [
            'datapengelola'      => User::where('id', $id)->first()


        ];
        return view('page.user.editpengelola', $data);
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
        'role'                  => 'Pengelola',
        'picture'               => $nama_foto

        ];
        User::where('id', $id)->update($dataStore);
        return redirect('/indexpengelola');
    }
    public function hapus(Request $request, $id){
        User::where('id', $id)->delete();
        return redirect('/indexpengelola');
    }
}


