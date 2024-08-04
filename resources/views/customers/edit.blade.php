@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Edit Customers</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('customers.update', $data_customers->NIK) }}" method="POST">
                @csrf
                @method('PUT')

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
                    <input type="text" name="NIK" class="form-control" id="exampleInputNIK" placeholder="Enter NIK" value="{{ old('NIK', $data_customers->NIK) }}">
                    <small id="usernamelHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                    @error('NIK')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername">Nama Customer</label>
                    <input type="text" name="nama_customer" class="form-control" id="exampleInputUsername" placeholder="Enter Username" value="{{ old('nama_customer', $data_customers->nama_customer) }}">
                    <small id="usernamelHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                    @error('nama_customer')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputCountry">Country</label>
                        <input type="text" name="country" class="form-control" id="exampleInputCountry" placeholder="Enter Country" value="{{ old('country', $data_customers->country) }}">
                        <small id="countryHelp" class="form-text text-muted">We'll never share your country with anyone else.</small>
                        @error('country')
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