@extends('dashboard.app')
@section ('content')
<div class="section-header">
  <h1>Tambah Pengguna</h1>
  <div class="section-header-breadcrumb">
  </div>
</div>
<div class="section-body">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('pengguna.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputUsername">Username</label>
          <input type="text" name="name" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter username">
          <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
          @error('username')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('email')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
          @error('password')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
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