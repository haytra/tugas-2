<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    /** @use HasFactory<\Database\Factories\BukuFactory> */
    use HasFactory;

    protected $fillable = [
        'judul',
        'ISBN',
        'deskripsi',
        'tanggal_perbitan',
    ];
}
