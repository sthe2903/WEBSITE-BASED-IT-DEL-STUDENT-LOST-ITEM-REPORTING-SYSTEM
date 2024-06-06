<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumKehilangan extends Model
{
    use HasFactory;

    protected $table='forumhilang';
    protected $fillable=[
        'barang',
        'pemilik',
        'telepon',
        'lokasi',
        'deskripsi',
        'kategori',
        'gambar',
    ];
}
