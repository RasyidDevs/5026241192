<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LatihanRouting;

Route::get('/', function () {
    return view('main');
});
Route::get('halo', function () {
    return "<h1><b>Halo</b>, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('pert5', function () {
    return view('pertemuan5');
});
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
