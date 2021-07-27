<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table_penduduk;
use App\Models\Table_geo_luas_dan_tanah;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function getGeoLuasTanah()
    {

        $datas = DB::table('table_geo_luas_dan_tanahs')
            ->join('table_kecamatans', 'table_kecamatans.id', '=', 'table_geo_luas_dan_tanahs.id_kec')
            ->get();

        return response()->json([
            'data' => $datas
        ]);
    }

    public function getPenduduk()
    {
        $datas = DB::table('table_penduduks')
            ->join('table_kecamatans', 'table_kecamatans.id', '=', 'table_penduduks.id_kec')
            ->join('table_kelurahans', 'table_kelurahans.id', '=', 'table_penduduks.id_kel')
            ->get();

        return response()->json([
            'data' => $datas
        ]);
    }
}
