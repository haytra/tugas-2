<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    /** @use HasFactory<\Database\Factories\PeminjamanFactory> */
    use HasFactory;

    protected $fillable = [
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'status_peminjaman',
    ];
}
