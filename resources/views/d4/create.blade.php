@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Tambah Belanja</h2>


    <form action="{{ route('d4.store') }}" method="POST">
        @csrf

        <p>
            <label>KodeBarang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" maxlength="10">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" id="Jumlah" maxlength="20">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="text" name="Harga" id="Harga" maxlength="5">
        </p>


        <button type="submit">Simpan</button>

    </form>
@endsection
