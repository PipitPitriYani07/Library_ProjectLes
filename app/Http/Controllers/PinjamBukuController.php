<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class PinjamBukuController extends Controller
{
    public function index(Request $request){
        $data = [
            'datapinjam'    => Transaksi::with(['user'])->get()
        ];
        return view ('page.pinjambuku.indexpinjam', $data);
    }
}
