@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Data Keranjang Belanja</h2>
    <br><br>
    <a href="{{ route('d4.create')}}" class="btn btn-warning">Beli</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>KodePembelian</th>
            <th>KodeBarang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @foreach($keranjang as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah}}</td>
                <td>{{ formatRibuan($row->Harga) }}</td>

                <td>
                    <a href="{{ route('d4.create', $row->ID) }}" class="btn btn-warning">Beli</a>
                    <form action="{{ route('d4.destroy', $row->ID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    @php
        function formatRibuan($angka) {
            return number_format($angka, 0, ',', '.');
        }
    @endphp
@endsection
