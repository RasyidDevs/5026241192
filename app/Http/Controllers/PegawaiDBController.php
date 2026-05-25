<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Console\get;

class PegawaiDBController extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(100);

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
}
