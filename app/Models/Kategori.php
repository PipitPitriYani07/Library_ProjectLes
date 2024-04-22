<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
        'keterangan',
        'status'
    ];
    protected $table = 'kategoris';

    //relasi ke tabel buku
    public function buku(){
        return $this->hasMany(Buku::class, 'kategori_id', 'id');
    }
}
