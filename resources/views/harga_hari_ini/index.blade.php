@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Data Ketersediaan Kamar</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('harga_hari_ini.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Available Room</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($harga_hari_ini as $index => $harga_hari_ini)
                    <tr>
                        <td class="text-center">
                            {{ ++$index }}
                        </td>
                        <td>{{ $harga_hari_ini->harga}}</td>
                        <td>{{ $harga_hari_ini->available_room }}</td>
                        <td>{{ $harga_hari_ini->tanggal }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('harga_hari_ini.destroy', $hargaHariIni->id_hotel) }}" method="POST">
                                <a href="{{ route('harga_hari_ini.show', $harga_hari_ini->id_hotel) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('harga_hari_ini.edit', $harga_hari_ini->id_hotel) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Ketersediaan Kamar Belum Ada.
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection