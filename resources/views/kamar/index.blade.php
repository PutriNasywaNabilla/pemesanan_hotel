@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Data Kamar</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('kamar.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kamar</th>
                        <th scope="col">Jenis Kamar</th>
                        <th scope="col">Ukuran Kamar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kamar as $index => $kamar)
                    <tr>
                        <td class="text-center">
                            {{ ++$index }}
                        </td>
                        <td>{{ $kamar->nama_kamar }}</td>
                        <td>{{ $kamar->jenis_kamar }}</td>
                        <td>{{ $kamar->ukuran_kamar }}</td>
                        <td>{{ $kamar->harga }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kamar.destroy', $kamar->id_kamar) }}" method="POST">
                                <a href="{{ route('kamar.show', $kamar->id_kamar) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('kamar.edit', $kamar->id_kamar) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Kamar Belum Ada.
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection