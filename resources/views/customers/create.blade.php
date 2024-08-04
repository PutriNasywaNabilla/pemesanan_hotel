@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Tambah Customers</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Email</label>
                    <select class="form-control" name="customer_id" id="exampleFormControlSelect1">
                        @foreach ($user as $dt_user)
                        <option value="{{ $dt_user->id }}">{{ $dt_user->email }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputNIK">NIK</label>
                    <input type="text" name="NIK" class="form-control" id="exampleInputNIK" aria-describedby="NIKHelp" placeholder="Enter NIK">
                    <small id="NIKHelp" class="form-text text-muted">We'll never share your NIK with anyone else.</small>
                    @error('NIK')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername">Nama Customer</label>
                    <input type="text" name="nama_customer" class="form-control" placeholder="Enter your name">
                    <small id="usernameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                    @error('nama_customer')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputCountry">Country</label>
                    <input type="text" name="country" class="form-control" id="exampleInputCountry" aria-describedby="countryHelp" placeholder="Enter country">
                    <small id="countryHelp" class="form-text text-muted">
                        @error('country')
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