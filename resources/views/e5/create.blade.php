@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Tambah Nilai Kuliah</h2>


    <form action="{{ route('e5.store') }}" method="POST">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" id="NRP" maxlength="10">
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka" id="NilaiAngka" maxlength="20">
        </p>

        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS" id="SKS" maxlength="5">
        </p>


        <button type="submit">Simpan</button>

    </form>
@endsection
