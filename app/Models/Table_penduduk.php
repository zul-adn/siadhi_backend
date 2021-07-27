<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_penduduk extends Model{
    use HasFactory;

    protected $fillable = [
       'id_kec',
       'id_kel',
       'laki-laki',
       'perempuan'
    ];
}