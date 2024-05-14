<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Customers</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('customers.update', $dataCustomers->id) }}" method="POST" >
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputNIK">NIK</label>
                                <input type="text" name="NIK" class="form-control" id="exampleInputNIK" placeholder="Enter NIK" value="{{ old('NIK', $dataCustomers->NIK) }}">
                                <small id="usernamelHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                @error('NIK')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputUsername">Nama Customer</label>
                                <input type="text" name="nama_customer" class="form-control" id="exampleInputUsername" placeholder="Enter Username" value="{{ old('nama_customer', $dataCustomers->nama_customer) }}">
                                <small id="usernamelHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                @error('nama_customer')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter email" value="{{ old('email', $dataCustomers->email) }}">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              @error('email')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputCountry">Country</label>
                                    <input type="text" name="country" class="form-control" id="exampleInputCountry" placeholder="Enter Country" value="{{ old('country', $dataCustomers->country) }}">
                                    <small id="countryHelp" class="form-text text-muted">We'll never share your country with anyone else.</small>
                                    @error('country')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                  </div>
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
           
                        
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>