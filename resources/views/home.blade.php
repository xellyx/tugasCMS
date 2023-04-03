<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    

@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>CRUD SEDERHANA</h1>
</div>

<h4 class="mt-4">Website sederhana yang berisi tambah produk, memilih kategori, dan keranjang produk </h4>
<br>
<p>
    <a class="btn btn-primary btn-lg" href="{{ url('/product/add') }}">Tambah Produk</a>
    <a class="btn btn-primary btn-lg" href="{{ url('/product') }}">Lihat Produk</a>
</p>
</div> 

@endsection
</body>
</html>