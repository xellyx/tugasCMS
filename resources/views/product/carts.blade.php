<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <a class="btn btn-primary mt-3" href="{{ url('/product') }}">
            <- Kembali</a>

                <form action="{{ url('/carts') }}" method="POST">
                    <div class="card mt-3">
                        <h1 style="text-align: center;">KERANJANG</h1>
                        <div class="card-body">
                            <div class="card-title">
                                <table class="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($carts as $item)
                                            <tr>
                                                <td>{{ $item['name'] }}</td>
                                                <td>Rp {{ $item['price'] }}</td>
                                                <td><input type="number" id="quantity" name="quantity" min="1"
                                                        max="99"></td>
                                                <td class="button">
                                                    <a href="/carts/{{ $item->id }}/delete">
                                                        <button class="btn btn-danger mt-2" type="button">Hapus</button>
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


                
                <script href="{{ asset('js/addtocart.js') }}"></script>
</body>

</html>
