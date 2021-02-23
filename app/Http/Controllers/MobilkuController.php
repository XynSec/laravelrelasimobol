<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import fungsi query builder

class MobilkuController extends Controller
{
    public function index(){
    
        //mengambil data dari database menggunakan db::table() dan disimpan ke dalam $data
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array
        // ------
        //diakhir first() jika hanya satu data yang diambil

        $data = DB::table('mobil')
                ->join('mobil_type', 'mobil_type.id_mobil', '=', 'mobil.id_mobil')
                ->get();

        //tampilkan view mobil dan kirim datanya ke view tersebut
        return view('mobilku')->with('data', $data);
    }
}
