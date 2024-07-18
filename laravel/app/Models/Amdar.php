<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amdar extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'tbl_amdar';

    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'gol_darah',
        'jumlah',
        'keterangan',
    ];
}
