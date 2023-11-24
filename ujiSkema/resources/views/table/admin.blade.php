<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Bootstrap/bootstrap.min.css') }}">
    <title>Kandidat</title>
</head>
<body>
    @include('nav_user.user')

    <div class="container mt-4  ">
        <div class="card mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
            <div class="card-header">
                <a href="/tambah/admin" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body ">
                <table class="table">
                    <thead style="background-color:black" >
                      <tr style="color: white">
                        <th scope="col">No</th>
                        <th scope="col">Nama Ketos</th>
                        <th scope="col">Nama waketos</th>


                        <th scope="col">Aksi</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $data  )
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $data->name }}</td>
                          <td>{{ $data->email }}</td>
                          <td>
                            <a href="/edit/admin/{{ $data->id }}" class="btn btn-warning">Edit </a>
                            <a href="/delete/admin/{{ $data->id }}" class="btn btn-success">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>

            </div>
          </div>
    </div>

    <script src="{{ asset('Bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
