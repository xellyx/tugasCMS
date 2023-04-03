<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambahkan Produk</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style3.css') }}">
</head>

<body>

    @extends('layouts.app')

    @section('content')
        <h1>TAMBAH DATA</h1>
        <form action="{{ url('/product') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">

                @error('product_name')
                    <div class="invalid-feedback">
                        Nama tidak boleh kosong!
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error('product_description') is-invalid @enderror"
                    id="exampleInputPassword1" name="product_description">
                @error('product_description')
                    <div class="invalid-feedback">
                        Deskripsi tidak boleh kosong
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="text" class="form-control @error('product_price') is-invalid @enderror"
                    id="exampleInputPassword1" name="product_price">
                @error('product_price')
                    <div class="invalid-feedback">
                        Harga tidak boleh kosong & Tidak boleh mengisi selain angka!
                    </div>
                @enderror
            </div>
            <label for="exampleInputPassword1" class="form-label">Kategori</label>
            <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example"
                name="category_id">
                <option selected>Pilih Kategori Produk</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="svbtn btn-primary mt-3">Tambah</button>
        </form>
    @endsection
</body>

</html>
