<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Console\get;

class ObatController extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table obat
        $obat = DB::table('obat')->paginate(100);

        // mengirim data obat ke view index
        return view('index2', ['obat' => $obat]);
    }
      // method untuk menampilkan view form tambah obat
	public function tambah()
	{
		return view('tambah2');
	}

	// method untuk insert data ke table obat
	public function store(Request $request)
	{
		// insert data ke table obat jika PK Autonumber
		DB::table('obat')->insert([
			'merkobat' => $request->nama,
			'stockobat' => $request->jenis,
			'tersedia' => $request->stock,
		]);
		// alihkan halaman ke halaman obat
		return redirect('/obat');
	}

	// method untuk edit data obat
	public function edit($id)
	{
		// mengambil data obat berdasarkan id yang dipilih
		$obat = DB::table('obat')->where('kodeobat',$id)->get();
		// passing data obat yang didapat ke view edit.blade.php
		return view('edit2',['obat' => $obat]);

	}

	// update data obat
	public function update(Request $request)
	{
		// update data obat
		DB::table('obat')->where('kodeobat',$request->id)->update([
			'merkobat' => $request->nama,
			'stockobat' => $request->jenis,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman obat
		return redirect('/obat');
	}


	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data obat berdasarkan id yang dipilih
		DB::table('obat')->where('kodeobat',$id)->delete();

		// alihkan halaman ke halaman obat
		return redirect('/obat');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table obat sesuai pencarian data
		$obat = DB::table('obat')
		->where('merkobat','like',"%".$cari."%")
		->paginate(10)
		->appends($request->all());

		// mengirim data obat ke view index
		return view('index2',["obat" => $obat]);

	}

}
