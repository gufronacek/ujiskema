<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Bootstrap/bootstrap.min.css') }}">
    <title>Pemilih</title>
</head>
<body>
    @include('nav_user.user')

    <div class="container ">
        <div class="card mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-header">
                <a href="/tambah/pemilihan" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body ">
                <table class="table">
                    <thead class="thead-dark">
                      <tr style="color: white">
                        <th scope="col">NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemilih as $data )
                        <tr style="{{ $data->voted == true ? 'background-color: rgba(207, 250, 142, 0.719);' : '' }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->nisn }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                <a href="/edit/pemilihan/{{ $data->id }}" class="btn btn-warning">Edit </a>
                                <a href="/delete/pemilihan/{{ $data->id }}" class="btn btn-success">Delete</a>
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
