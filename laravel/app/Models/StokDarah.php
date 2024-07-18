<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokDarah extends Model
{
    use HasFactory;

    protected $table = 'tbl_stok_darah'; // Nama tabel jika berbeda dari konvensi

    protected $fillable = [
        'gol_darah',
        'jumlah',
    ];
}
