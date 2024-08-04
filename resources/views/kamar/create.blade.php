@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Tambah Kamar</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('kamar.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNamaKamar">Nama Kamar</label>
                    <input type="text" name="nama_kamar" class="form-control" id="exampleInputNamaKamar" aria-describedby="nama_kamarHelp" placeholder="Enter Nama Kamar">
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
                    <input type="int" name="ukuran_kamar" class="form-control" placeholder="Enter your room size">
                    <small id="ukuran_kamarHelp" class="form-text text-muted">
                        @error('ukuran_kamar')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputHargaKamar">Harga</label>
                    <input type="int" name="harga" class="form-control" placeholder="Enter harga">
                    <small id="hargaHelp" class="form-text text-muted">
                        @error('harga')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection