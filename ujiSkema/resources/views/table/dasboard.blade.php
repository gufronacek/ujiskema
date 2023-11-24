<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Bootstrap/bootstrap.min.css') }}">
    <title>Hasil</title>
</head>
<body>
    @include('nav_user.user')
    {{-- <div class="container mt-4">
        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-body">
              This is some text within a card body.
            </div>
          </div>
      </div> --}}



      <div class="container mt-5 ">
        <div class="col mt-2">
        </div>
        <div class="card-body ml-4 ">
                <h3>KANDIDAT</h3>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ( $data  as $item )
                    <div class="col">
                      <div class="card">
                        <img src="{{ asset('image/'.$item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <td>{{ $item->nama_ketos }}</td> and
                            <td>{{ $item->nama_waketos }}</td>
                            <p href="">{{ DB::table('hasils')->where('kandidat_id',$item->id)->count() }}</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>

                    {{-- <div class="col-sm-4">
                        <div class="conatiner mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
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
