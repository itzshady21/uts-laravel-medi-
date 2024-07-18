<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DarahModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'golongan_darah',
        'jumlah',
    ];
}

