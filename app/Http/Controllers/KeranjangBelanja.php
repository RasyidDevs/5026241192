<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Console\get;

class KeranjangBelanja extends Controller{
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->get();
        return view("d4.index",  ['keranjang' => $keranjang]);
    }
	public function create()
	{
		return view("d4.create");

	}

	public function store(Request $request)
	{
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga,
		]);
		return redirect('/d4');

	}


	public function destroy($id)
	{
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		return redirect('/d4');
	}
}
