@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Data Nilai Kuliah</h2>
    <br><br>
    <a href="{{ route('e5.create')}}" class="btn btn-warning">Tambah Data</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @foreach($nilaikuliah as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>{{ convertNilai($row->NilaiAngka) }}</td>
                <td>{{ $row->NilaiAngka * $row->SKS }}</td>
            </tr>

        @endforeach
    </table>
    @php
      function convertNilai($nilai){
        if($nilai <= 40){
            return "D";
        }
        elseif ($nilai <= 60) {
            return "C";
        }
        elseif ($nilai <= 80) {
            return "B";
        }else{
            return "A";
        }

      }
    @endphp
@endsection
