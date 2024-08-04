@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Edit Data Ketersediaan Kamar</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card-body">
        <form action="{{ route('harga_hari_ini.update', $data_harga_hari_ini->id_hotel) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="exampleInputHarga">Harga</label>
                <input type="int" name="harga" class="form-control" id="exampleInputHarga" placeholder="Enter Harga Kamar" value="{{ old('harga', $data_harga_hari_ini->harga) }}">
                <small id="hargaHelp" class="form-text text-muted">
                @error('harga')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputAvailableRoom">Available Room</label>
                <input type="int" name="available_room" class="form-control" id="exampleInputAvailableRoom" placeholder="Enter Available Room" value="{{ old('available_room', $data_data_harga_hari_ini->available_room) }}">
                <small id="available_roomHelp" class="form-text text-muted">
                @error('available_room')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputTanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="exampleUkuranTanggal" placeholder="Enter Tanggal Hari Ini" value="{{ old('tanggal', $data_data_harga_hari_ini->tanggal) }}">
                <small id="tanggalHelp" class="form-text text-muted">
                    @error('tanggal')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="id_kamar">Pilih Kamar</label>
                <select name="id_kamar" class="form-control">
                    @foreach($kamars as $kamar)
                        <option value="{{ $kamar->id_kamar }}" {{ $kamar->id_kamar == old('id_kamar', $data_harga_hari_ini->id_kamar) ? 'selected' : '' }}>
                            {{ $kamar->nama_kamar }}
                        </option>
                    @endforeach
                </select>
                @error('id_kamar')
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