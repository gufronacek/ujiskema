
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
              <h5>FORM TAMBAH PEMILIH</h5>
            </div>
            <div class="card-body">
                <form action="/insert/pemilihan" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="password">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">NISN</label>
                      <input type="text" name="nisn" class="form-control" id="nisn" placeholder="nisn">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
            </div>
        </div>
        <div class="col mt-3">
            <a href="/pemilihan" class="btn btn-primary"> kembali</a>
        </div>

        <script src="{{ asset('Bootstrap/bootstrap.min.js') }}"></script>
    </body>
    </html>



