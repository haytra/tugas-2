<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    /** @use HasFactory<\Database\Factories\UlasanFactory> */
    use HasFactory;

    protected $fillable = [
        'rating',
        'komentar',
        'gambar',
    ];
}
