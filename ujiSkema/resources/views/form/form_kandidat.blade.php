
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Bootstrap/bootstrap.min.css') }}">
    <title>Login</title>
</head>
<body>
    @include('nav_user.user')
    <div class="container mt-5 ">
        <div class="card text-">

            <div class="card-header">
                <div class="col" >
                    <img src="{{ asset('card/kpo (1).png') }}" width="70px" class="rounded mx-auto d-block mt-2 " alt="">
                </div>
              FORM TAMBAH KANDIDAT
            </div>
            <div class="card-body">
                <form action="/insert/kandidat" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name Ketos</label>
                      <input type="text" name="nama_ketos" class="form-control" id="nama_ketos" placeholder="nama_ketos">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Nama Waketos</label>
                      <input type="text" name="nama_waketos" class="form-control" id="nama_waketos" placeholder="nama_waketos">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Gambar</label>
                      <input type="file" name="image" class="form-control" id="image" placeholder="image">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Visi</label>
                      <input type="text" name="visi" class="form-control" id="visi" placeholder="visi">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Misi</label>
                      <input type="text" name="misi" class="form-control" id="misi" placeholder="misi">
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
            </div>
        </div>
        <div class="col mt-3">
            <a href="/kandidat" class="btn btn-primary"> kembali</a>
        </div>

        <script src="{{ asset('Bootstrap/bootstrap.min.js') }}"></script>
    </body>
    </html>


