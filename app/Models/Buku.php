<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_buku',
        'penulis',
        'penerbit_id',
        'tahun_terbit',
        'pictures',
        'kategori_id',
        'status'

    ];

    protected $table = 'bukus';

    //relasi nilai balik
    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function penerbit(){
        return $this->belongsTo(Penerbit::class, 'penerbit_id', 'id');
    }
}
