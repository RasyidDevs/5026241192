@extends('template')
@section('title', 'Data Obat')
@section('konten')
    <a href="/obat/tambah" class="btn btn-primary"> + Tambah Obat Baru</a>
    <br />
    <br />
    <p>Cari Data Obat :</p>
    <form action="/obat/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Obat .." class="form-control">
        <input type="submit" value="CARI">
    </form>
    <br />
    <table class="table table-striped table-hover ">
        <tr>
            <th>Kode Obat</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
        </tr>
        @foreach ($obat as $o)
            <tr>
               <td>{{ $o->kodeobat }}</td>
                <td>{{ $o->merkobat }}</td>
                <td>{{ $o->stockobat }}</td>
                <td>{{ $o->tersedia }}</td>
                <td>
                    <a href="/obat/edit/{{ $o->kodeobat }}"class="btn btn-warning">Edit</a>

                    <a href="/obat/hapus/{{ $o->kodeobat }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $obat->links() }}
@endsection
