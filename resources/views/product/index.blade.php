<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @extends('app')

    @section('content')
        <a href="{{ url('/product/add') }}">
            <button class="btn btn-primary mt-4" type="button">+ Tambah Produk</button>
        </a>

        <a href="{{ url('/category') }}">
            <button class="btn btn-warning mt-4" type="button">Manage Kategori</button>
        </a>

        <a href="{{ url('/carts') }}">
            <button class="cart btn btn-success mt-4" type="button">Keranjang</button>
        </a>

        <div class="card mt-3">
            <h1 style="text-align: center;">PRODUK</h1>
            <div class="card-body">
                <div class="card-title">
                    <table class="table1">

                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>Rp {{ $item['price'] }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td class="button"> <a href="/product/{{ $item->id }}/edit">
                                            <button class="btn btn-warning mt-2" type="button">Ubah</button>
                                        </a>

                                        <a href="/product/{{ $item->id }}/delete">
                                            <button class="btn btn-danger mt-2" type="button">Hapus</button>
                                        </a>

                                        <a href="/shift-data/">
                                            <button class="btn btn-primary mt-2" type="button">Tambahkan ke
                                                keranjang</button>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
