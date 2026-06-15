<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EasController extends Controller
{
    public function index()
    {
        $tagihan_air = DB::table('tagihan_air')->get();
        return view("eas.index",  ['tagihan_air' => $tagihan_air]);
    }
    public function create()
    {
        return view("eas.create");
    }

    public function store(Request $request)
    {
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir,
        ]);
        return redirect('/eas');
    }
}
