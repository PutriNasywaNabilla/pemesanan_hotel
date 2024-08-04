@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Edit Data Kamar</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card-body">
        <form action="{{ route('kamar.update', $data_kamar->id_kamar) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="exampleInputNamaKamar">Nama Kamar</label>
                <input type="text" name="nama_kamar" class="form-control" id="exampleInputNamaKamar" placeholder="Enter Nama Kamar" value="{{ old('nama_kamar', $data_kamar->nama_kamar) }}">
                <small id="nama_kamarHelp" class="form-text text-muted">We'll never share your room name with anyone else.</small>
                @error('nama_kamar')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect">Jenis Kamar</label>
                <select class="form-control" name="jenis_kamar" id="exampleFormControlSelect">
                    <option value="deluxe">Deluxe</option>
                    <option value="superior">Superior</option>
                    <option value="president">President</option>
                </select>
                @error('jenis_kamar')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputUkuranKamar">Ukuran Kamar</label>
                <input type="int" name="ukuran_kamar" class="form-control" id="exampleUkuranKamar" placeholder="Enter Ukuran Kamar" value="{{ old('ukuran_kamar', $data_kamar->ukuran_kamar) }}">
                <small id="ukuran_kamarHelp" class="form-text text-muted">
                    @error('ukuran_kamar')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputHarga">Harga</label>
                <input type="int" name="harga" class="form-control" id="exampleHarga" placeholder="Enter Harga" value="{{ old('harga', $data_kamar->harga) }}">
                <small id="hargaHelp" class="form-text text-muted">
                    @error('harga')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
            </div>
            <br />
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection