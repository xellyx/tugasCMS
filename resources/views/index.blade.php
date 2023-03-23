<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
        <div class="container-fluid">
            <a class="jdl_navbar">CRUD</a>
        </div>
    </nav>

    <div class="container">
        <div class="mt-5">
            <h1>CRUD SEDERHANA</h1>
        </div>

        <h4 class="mt-4">Website sederhana yang berisi tambah produk, memilih kategori, dan keranjang produk </h4>
        <br>
        <p>
            <a class="btn btn-primary btn-lg" href="{{ url('/product/add') }}">Tambah Produk</a>
        </p>

        <p>
            <a class="btn btn-primary btn-lg" href="{{ url('/product') }}">Lihat Produk</a>
        </p>
    </div>

</body>

</html>
