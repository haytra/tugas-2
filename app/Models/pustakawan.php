<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pustakawan extends Model
{
    /** @use HasFactory<\Database\Factories\PustakawanFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'alamat',
        'nomor_telpon',
        'foto_profil',
        'penulsi_id',
        'anggota_id',
    ];
}
