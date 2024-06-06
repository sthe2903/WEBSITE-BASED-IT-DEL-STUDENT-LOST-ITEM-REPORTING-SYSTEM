<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table='forum';
    protected $fillable=[
        'barang',
        'penemu',
        'telepon',
        'lokasi',
        'status',
        'deskripsi',
        'kategori',
        'gambar',


    ];
}
