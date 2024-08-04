@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Detail Data Pengguna</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item active">Defaul Layout</div>
    </div>
</div>

<div class="section-body">
                        <div class="card-body">
                            <h3 class="card-title">{{$customers->NIK }}</h3>
                            <p class="card-text">{{$customers->email}}</p>
                            <p class="card-text">{{ $customers->nama_customer }}</p>
                            <p class="card-text">{{ $customers->country }}</p>
            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Kembali</a>

                        </div>
                    </div>
                </div>
@endsection