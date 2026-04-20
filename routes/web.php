<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
Route::get('/', function () {
    return view('welcome');
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
