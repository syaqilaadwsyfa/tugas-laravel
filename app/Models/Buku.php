<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $fillable = [
        'kode_anggota',
        'judul_anggota',
        'penulis_anggota',
        'penerbit_anggota',
        'tahun_terbit',
        'stok',
    ];
}
