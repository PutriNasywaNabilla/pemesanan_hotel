@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Data Customers</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('customers.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Customers</th>
                        <th scope="col">Country</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $index => $customers)
                    <tr>
                        <td class="text-center">
                            {{ ++$index }}
                        </td>
                        <td>{{ $customers->email }}</td>
                        <td>{{ $customers->NIK }}</td>
                        <td>{{ $customers->nama_customer }}</td>
                        <td>{{ $customers->country }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customers.destroy', $customers->NIK) }}" method="POST">
                                <a href="{{ route('customers.show', $customers->NIK) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('customers.edit', $customers->NIK) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Customers Belum Ada.
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection