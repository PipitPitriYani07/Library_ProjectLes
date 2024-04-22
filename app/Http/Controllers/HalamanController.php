<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(Request $request){
        return view('welcome');
    }
    public function halaman(Request $request){
        return view('halaman_utama');
    }
    public function ini(Request $request){
        return view('login');
    }


}
