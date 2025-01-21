<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rakbuku extends Model
{
    /** @use HasFactory<\Database\Factories\RakBukuFactory> */
    use HasFactory;

    protected $fillable = [
        'noRak',
    ];
}
