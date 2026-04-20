<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index()
    {
        return "Ini adalah halaman dosen";
    }
    public function biodata(){
        $nama = "Rasyid Bomantoro";
        $umur = 19;
        $matkul = ["Pemrograman Web", "Pemrograman Mobile", "Pemrograman Desktop"];
    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'matkul' => $matkul]);
    }
}
