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

    <div class="container">
        <div class="container mt-5 ">
            <div class="col mt-2">
                <h3>Hasil Voting</h3>
              </div>

              <div class="card-body ml-4 ">
                  <div class="row">
                        @foreach ( $hasil as $item )
                        <div class="col-sm-4">
                            <div class="conatiner mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('image/'.$item->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text">
                                          <td>
                                            <td>{{ $item->nama_ketos }}</td> and
                                            <td>{{ $item->nama_waketos }}</td>
                                            <p href="">{{ DB::table('hasils')->where('kandidat_id',$item->id)->count() }}</p>
                                        </td>
                                      </p>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
              </div>
    </div>

    <script src="{{ asset('Bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
