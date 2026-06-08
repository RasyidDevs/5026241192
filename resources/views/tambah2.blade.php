@extends('template')
@section('title', 'Data Obat')
@section('konten')

    <a href="/obat" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Obat
        </div>

        <div class="card-body">
            <form action="/obat/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">merkobat</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jenis" class="col-sm-2 col-form-label">stockobat</label>
                    <div class="col-sm-10">
                        <input type="text" name="jenis" id="jenis" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>



@endsection
