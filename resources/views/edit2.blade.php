@extends('template')
@section('title', 'Data Obat')
@section('konten')

    <a href="/obat" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($obat as $o)
        <div class="card">
            <div class="card-header">
                Form Edit Data Obat
            </div>

            <div class="card-body">
                <form action="/obat/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $o->kodeobat }}">

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">merkobat</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" id="nama" class="form-control" required
                                value="{{ $o->merkobat }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jenis" class="col-sm-2 col-form-label">stockobat</label>
                        <div class="col-sm-10">
                            <input type="text" name="jenis" id="jenis" class="form-control" required
                                value="{{ $o->stockobat }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <select name="tersedia" id="tersedia" class="form-control" required>
                                <option value="Y" {{ $o->tersedia == 'Y' ? 'selected' : '' }}>Y</option>
                                <option value="N" {{ $o->tersedia == 'N' ? 'selected' : '' }}>N</option>
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
    @endforeach

@endsection
