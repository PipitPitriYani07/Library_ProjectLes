<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PinjamBukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post('/kategoris',[KategoriController::class, 'kategori']);
Route::get('/kategori',[KategoriController::class, 'kategoris']);
Route::get('/lihatkategori',[KategoriController::class, 'data']);

Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'registered']);

Route::get('/login',[AuthController::class, 'index2'])->name('login');
Route::post('/ceklogin',[AuthController::class, 'ceklogin']);

//Route::get('/bukus',[BukuController::class, 'buku']);
//Route::post('/bukus',[BukuController::class, 'databuku']);
//Route::get('/lihatbuku',[BukuController::class, 'data']);

Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);
Route::post('/ubahkategori/{id}', [KategoriController::class, 'ubah']);


Route::get('/penerbit', [PenerbitController::class, 'penerbit']);
Route::post('/penerbit2', [PenerbitController::class, 'data']);
Route::get('/lihatpenerbit',[PenerbitController::class, 'datapenerbit']);
Route::get('/penerbit/edit/{id}',[PenerbitController::class, 'edit']);
Route::post('/ubahpenerbit/{id}', [PenerbitController::class, 'ubah']);

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/indexbuku', [BukuController::class, 'data']);
    Route::get('/tambahbuku', [BukuController::class,'buku']);
    Route::get('/buku/edit/{id}',[BukuController::class, 'edit']);
    Route::post('/ubahbuku/{id}', [BukuController::class, 'ubah']);
    Route::get('/hapusbuku/{id}',[BukuController::class, 'hapus']);

    Route::get('/tambahkategori', [KategoriController::class,'kategoris']);
    Route::get('/indexkategori', [KategoriController::class, 'data']);
    Route::get('/hapuskategori/{id}',[KategoriController::class, 'hapus']);

    Route::get('/indexpenerbit', [PenerbitController::class, 'datapenerbit']);
    Route::get('/tambahpenerbit', [PenerbitController::class,'penerbit']);
    Route::get('/hapuspenerbit/{id}',[PenerbitController::class, 'hapus']);


    Route::get('/indexpeminjam', [PeminjamController::class, 'index']);
    Route::get('/tambahpeminjam', [PeminjamController::class, 'indexx']);
    Route::post('/peminjam', [PeminjamController::class, 'datapeminjam']);
    Route::get('/peminjam/edit/{id}',[PeminjamController::class, 'edit']);
    Route::post('/ubahpeminjam/{id}', [PeminjamController::class, 'ubah']);
    Route::get('/hapuspeminjam/{id}',[PeminjamController::class, 'hapus']);

    Route::get('/indexpengelola', [UserController::class, 'index']);
    Route::get('/tambahpengelola', [UserController::class, 'indexx']);
    Route::post('/pengelola', [UserController::class, 'datapengelola']);
    Route::get('/pengelola/edit/{id}',[UserController::class, 'edit']);
    Route::post('/ubahpengelola/{id}', [UserController::class, 'ubah']);
    Route::get('/hapuspengelola/{id}',[UserController::class, 'hapus']);

    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('/pinjambuku', [PinjamBukuController:: class, 'index']);
    Route::get('/tambahpeminjaman', [PinjamBukuController:: class, 'tambah']);
    Route::post('/simpantransaksi', [PinjamBukuController:: class, 'simpantransaksi']);


});





