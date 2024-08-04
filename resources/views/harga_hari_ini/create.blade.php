@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Tambah Ketersediaan Kamar</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('harga_hari_ini.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputHarga">Harga</label>
                    <input type="int" name="harga" class="form-control" id="exampleInputHarga" aria-describedby="hargaHelp" placeholder="Enter Harga">
                    <small id="hargaHelp" class="form-text text-muted">
                    @error('harga')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputAvailableRoom">Available Room</label>
                    <input type="int" name="available_room" class="form-control" id="exampleInputAvailableRoom" aria-describedby="available_roomHelp" placeholder="Enter Available Room">
                    <small id="available_roomHelp" class="form-text text-muted">
                    @error('available_room')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Enter Date">
                    <small id="tanggalHelp" class="form-text text-muted">
                        @error('tanggal')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormIDKamar">ID Kamar</label>
                    <select class="form-control" name="id_kamar" id="exampleFormIDKamar">
                        @foreach ($kamar as $dt_kamar)
                        <option value="{{ $dt_kamar->id_kamar }}">{{ $dt_kamar->id_kamar }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection