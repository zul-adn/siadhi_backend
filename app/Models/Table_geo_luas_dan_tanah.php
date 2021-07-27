<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_geo_luas_dan_tanah extends Model{
    use HasFactory;

    protected $fillable = [
       'id_kec',
       'lintang',
       'bujur',
       'luas',
       'batas_utara',
       'batas_selatan',
       'batas_timur',
       'batas_barat',
       'jt_organosol',
       'jt_alluvial',
       'jt_pedsol',
       'jt_latosol',
       'jt_pmk',
    ];
}