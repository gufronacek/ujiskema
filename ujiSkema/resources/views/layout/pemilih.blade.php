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

  @include('nav_pemilih.nav')
  <div class="container mt-4">
    <div class="card shadow-sm p-1 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
        <h4>selamat datang di aplikasi pemilihan ketua dan wakil ketua osis smkn1 bondowoso</h4 >
        </div>
    </div>
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
       {{ session('error') }}
      </div>
      @elseif( session('succes'))
      <div class="alert alert-success" role="alert">
        {{ session('succes') }}
      </div>
    @endif
  </div>



  <div class="container mt-5 ">
    <div class="col mt-2">
    </div>
    <div class="card-body ml-4 ">
        <h3>KANDIDAT</h3>
            <div class="row">
                @foreach ( $data  as $item )
                <div class="col-sm-4 ">
                    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
                        <h3 class="p-2">KANDIDAT 1</h3>
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('image/'.$item->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <td>{{ $item->nama_ketos }}</td> and
                                <td>{{ $item->nama_waketos }}</td>
                              <p class="card-text mt-2">
                                @if (!Auth::guard('pemilih')->user()->voted)
                                <a href="/vote/{{ $item->id }}" class="btn btn-primary">Voting</a>
                                @endif
                              </p>
                            </div>
                          </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-sm-4">
                    <div class="conatiner mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
                        <h3 class="p-2">KANDIDAT 2</h3>
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('card/Kandidat 2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text"><a href="#" class="btn btn-primary">Voting</a>
                            </p>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="conatiner mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
                        <h3 class="p-2">KANDIDAT 3</h3>
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('card/Kandidat 3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text"><a href="#" class="btn btn-primary">Voting</a>
                            </p>
                            </div>
                          </div>
                    </div>
                </div>
            </div> --}}

      </div>
  </div>

    <script src="{{ asset('Bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>






