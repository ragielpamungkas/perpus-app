<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengadaan extends Controller
{
    public function tampilPengadaan(){
        return view('pengadaan.pembelian');
    }
}
