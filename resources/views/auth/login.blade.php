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
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-5" style="width: 20rem;">
                <h4 class="text-center mt-4">Login</h4>
                    <div class="col" >
                        <img src="{{ asset('card/kpo (1).png') }}" width="70px" class="rounded mx-auto d-block" alt="">
                    </div>
                <div class="card-body ">
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <br>
                        <div class="col text-center " >
                            <button type="submit" style="width: 15rem" class="btn btn-primary">Submit</button>
                        </div>
                        <br>

                      </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('Bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
