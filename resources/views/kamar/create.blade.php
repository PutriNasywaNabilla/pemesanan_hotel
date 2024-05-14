<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kamar</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kamar.store') }}" method="POST"   >
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputNamaKamar">Nama Kamar</label>
                            <input type="text" name="nama_kamar" class="form-control" id="exampleInputNamaKamar" aria-describedby="nama_kamarHelp" placeholder="Enter Nama Kamar">
                            <small id="nama_kamarHelp" class="form-text text-muted">We'll never share your room name with anyone else.</small>
                            @error('nama_kamar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect">Level</label>
                            <select class="form-control" name="jenis_kamar" id="exampleFormControlSelect">
                              <option value="deluxe">Deluxe</option>
                              <option value="superior">Superior</option>
                              <option value="president">President</option>
                             </select>
                             @error('level')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                              <div class="form-group">
                                <label for="exampleInputUkuranKamar">Ukuran Kamar</label>
                                <input type="int" name="ukuran_kamar" class="form-control" placeholder="Enter your room name">
                                <small id="ukuran_kamarHelp" class="form-text text-muted">We'll never share your room name with anyone else.</small>
                                @error('ukuran_kamar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputUkuranKamar">Harga</label>
                                <input type="int" name="harga" class="form-control" placeholder="Enter harga">
                                <small id="hargaHelp" class="form-text text-muted">We'll never share your room name with anyone else.</small>
                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
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