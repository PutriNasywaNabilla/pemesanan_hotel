@extends('dashboard.app')
@section ('content')
<div class="section-header">
    <h1>Edit Data Pengguna</h1>
    <div class="section-header-breadcrumb">
    </div>
</div>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" name="name" class="form-control" id="exampleInputUsername" placeholder="Enter username" value="{{ old('name', $pengguna->name) }}">
                    <small id="usernamelHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                    @error('username')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter email" value="{{ old('email', $pengguna->email) }}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ old('password', $pengguna->password) }}">
                    @error('password')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <br />
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Level</label>
                    <select class="form-control" name="level" id="exampleFormControlSelect1">
                        <option value="customer">Customer</option>
                        <option value="admin">Admin</option>
                    </select>
                    @error('level')
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