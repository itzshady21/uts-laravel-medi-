<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SidojaModel extends Model
{
    use HasFactory;
    protected $table = "tbl_sidoja";
    public $timestamps = false;
}