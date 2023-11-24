
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Bootstrap/bootstrap.min.css') }}">
    <title>pilih</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
        <a class="navbar-brand text-light" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="/dasboard">Dasboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="/pemilihan">Pemilih</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="/kandidat">Kandidat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="/hasil">Hasil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="/admin">User</a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <a href="/logout" class="btn btn-outline-success my-2 my-sm-0" tabindex="-1" type="submit">Logout</a>
              </form>
            </div>
          </nav>
        </div>
    </div>
    </nav>


    <script src="{{ asset('Bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>

