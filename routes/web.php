<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LatihanRouting;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});
Route::get('blog', function () {
    return view('blog');
});

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
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

Route::get('/template2', function () {
    return view('template2');
});
