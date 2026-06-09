<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LatihanRouting;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KeranjangBelanja;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});
Route::get('blog', function () {
    return view('blog');
});

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);




Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('meet2_news', [LatihanRouting::class, 'meet2_news']);
Route::get('meet2_news1', [LatihanRouting::class, 'meet2_news1']);
Route::get('meet3_template', [LatihanRouting::class, 'meet3_template']);
Route::get('meet3_intro', [LatihanRouting::class, 'meet3_intro']);

Route::get('meet5_pertemuan5', [LatihanRouting::class, 'meet5_pertemuan5']);

Route::get('tugasmeet3_contoh', [LatihanRouting::class, 'tugasmeet3_contoh']);
Route::get('tugasmeet4_5026241192', [LatihanRouting::class, 'tugasmeet4_5026241192']);
Route::get('tugasmeet5_tugaslinktree', [LatihanRouting::class, 'tugasmeet5_tugaslinktree']);


Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/template', function () {
    return view('template');
});
Route::get('/obat', [ObatController::class, 'index']);
Route::get('/obat/tambah', [ObatController::class, 'tambah']);
Route::post('/obat/store', [ObatController::class, 'store']);
Route::get('/obat/edit/{id}', [ObatController::class, 'edit']);
Route::post('/obat/update', [ObatController::class, 'update']);
Route::get('/obat/hapus/{id}', [ObatController::class, 'hapus']);
Route::get('/obat/cari', [ObatController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// D4
Route::get('/d4', [KeranjangBelanja::class, 'index'])->name('d4.index');
Route::get('/d4/create', [KeranjangBelanja::class, 'create'])->name('d4.create');
Route::post('/d4/store', [KeranjangBelanja::class, 'store'])->name('d4.store');
Route::delete('/d4/{ID}', [KeranjangBelanja::class, 'destroy'])->name('d4.destroy');
// E5

Route::get('/e5', [NilaiKuliahController::class, 'index'])->name('e5.index');
Route::get('/e5/create', [NilaiKuliahController::class, 'create'])->name('e5.create');
Route::post('/e5/store', [NilaiKuliahController::class, 'store'])->name('e5.store');
