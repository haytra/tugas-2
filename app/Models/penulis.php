<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    /** @use HasFactory<\Database\Factories\PenulisFactory> */
    use HasFactory;

    
    protected $fillable = [
        'name',
        'buku_id',
    ];
}
