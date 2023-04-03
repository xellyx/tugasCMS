<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}">
</head>

<body>
    @extends('layouts.auth')

    @section('title', 'login')

    @section('content')

        <div class="col-md-4 mx-auto my-5">
            <div class="card">
                <div class="card-body">
                    <h1>Halaman Login</h1>
                    <form action="{{ route('do.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" aria-describedby="emailHelp">
                            @error('email')
                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password">
                            @error('password')
                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <p>
                            Belum punya akun?
                            <a href="{{ route('register') }}">Silahkan Daftar</a>
                        </p>
                        <button type="submit" class="svbtn">Login</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
