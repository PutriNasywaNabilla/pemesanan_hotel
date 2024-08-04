@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Data Pengguna</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pengguna.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($user as $index => $pengguna)
                    <tr>
                        <td class="text-center">
                            {{ ++$index }}
                        </td>
                        <td>{{ $pengguna->name }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td class="text-truncate" style="max-width: 150px">{{ $pengguna->password }}</td>
                        <td>{{ $pengguna->level }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengguna.destroy', $pengguna->id) }}" method="POST">
                                <a href="{{ route('pengguna.show', $pengguna->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('pengguna.edit', $pengguna->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Pengguna Belum Ada.
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @endsection