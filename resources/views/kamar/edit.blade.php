<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Harga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Harga</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" >
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputNamaKamar">Nama Kamar</label>
                                <input type="text" name="nama_kamar" class="form-control" id="exampleInputNamaKamar" placeholder="Enter Nama Kamar" value="{{ old('nama_kamar', $kamar->nama_kamar) }}">
                                <small id="nama_kamarHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                @error('nama_kamar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect">Jenis Kamar</label>
                                <select class="form-control" name="jenis_kamar" id="exampleFormControlSelect">
                                    <option value="deluxe">Deluxe</option>
                                    <option value="superior">Superior</option>
                                    <option value="president">President</option>
                                 </select>
                                 @error('jenis_kamar')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                 </div>
                                 @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputUkuranKamar">Ukuran Kamar</label>
                                <input type="int" name="ukuran_kamar" class="form-control" id="exampleUkuranKamar" placeholder="Enter Ukuran Kamar" value="{{ old('ukuran_kamar', $kamar->ukuran_kamar) }}">
                                <small id="ukuran_kamarHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                @error('ukuran_kamar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputHarga">Harga</label>
                                <input type="int" name="harga" class="form-control" id="exampleHarga" placeholder="Enter Harga" value="{{ old('harga', $kamar->harga) }}">
                                <small id="hargaHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                @error('harga')
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