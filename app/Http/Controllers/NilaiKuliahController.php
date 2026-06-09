<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view("e5.index",  ['nilaikuliah' => $nilaikuliah]);
    }
	public function create()
	{
		return view("e5.create");

	}

	public function store(Request $request)
	{
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS,
		]);
		return redirect('/e5');
	}
    
}
