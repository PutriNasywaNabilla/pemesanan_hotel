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
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pengguna->name }}</h5>
            <p class="card-text">{{ $pengguna->email }}</p>
            <p class="card-text">{{ $pengguna->level }}</p>
            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection