@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <h2>Kode Soal Tagihan Air</h2>
    <br><br>
    <a href="{{ route('eas.create')}}" class="btn btn-warning">Input Tagihan Baru</a>
    <table class="table table-striped table-hover">
        <tr>
          <th>ID</th>
          <th>No Meteran</th>
          <th>Penggunaan (m3)</th>
          <th>Total Tagihan</th>
        </tr>

        @foreach($tagihan_air as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NoMeteran }}</td>
                <td>{{ ($row->MeterAkhir - $row->MeterAwal)}}</td>
                <td>{{ formatRibuan(($row->MeterAkhir - $row->MeterAwal) * 5000)}}</td>
            </tr>

        @endforeach
    </table>
    @php
        function formatRibuan($angka) {
            return number_Format($angka);
        }
    @endphp
@endsection
