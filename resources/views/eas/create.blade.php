@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <h2>Tambah Tagihan Air</h2>


    <form action="{{ route('eas.store') }}" method="POST" id="myForm">
        @csrf
        <div class="horizontal-form">
            <div class="form-group">
                <p>
                    <label>NoMeteran</label><br>
                    <input type="text" name="NoMeteran" id="NoMeteran">
                </p>

            </div>
            <div class="form-group">
                <p>
                    <label>MeterAwal</label><br>
                    <input type="text" name="MeterAwal" id="MeterAwal">
                </p>
            </div>
            <div class="form-group">
                <p>
                    <label>MeterAkhir</label><br>
                    <input type="text" name="MeterAkhir" id="MeterAkhir">
                </p>
            </div>
        </div>
        <span id="nama-error" class="error"></span>
        <br>
        <br>
        <button type="submit">Simpan</button>

    </form>
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            const meterAwal = document.getElementById('MeterAwal');
            const meterAkhir = document.getElementById("MeterAkhir");
            const errorElement = document.getElementById("nama-error");
            if (meterAkhir.value <= meterAwal.value + 20) {
                errorElement.textContent = 'meterakhir harus > meterAwal + 20';
                event.preventDefault(); // Menghentikan form submit
            } else if (meterAkhir.value.isNaN() || meterAwal.value.isNaN() {
                    errorElement.textContent = 'harus berupa angka';
                    event.preventDefault(); // Menghentikan form submit
                })
            else {
                errorElement.textContent = '';
            }
        });
    </script>
@endsection
