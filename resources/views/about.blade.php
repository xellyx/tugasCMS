<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>About Me</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
        <div class="container-fluid">
            <a class="jdl_navbar">Yusuf Rizky Yuhansyah</a>
            </a>

            <div>
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/about') }}">About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="biodata">
        <div class="container">
            <div class="row ">
                <div class="mb-4">
                    <h2>Tentang Saya</h2>
                </div>

                <div>
                    <div>
                        <img class="myimg" src="/images/32._YUSUF_RIZKY_YUHANSYAH (3).jpg" width="250"
                            height="auto" alt="self">
                    </div>
                </div>

                <div class="biodata1 col-lg-4">
                    <p>Tempat, Tanggal Lahir: <br>Batam, 08 Februari 2002</p>
                    <p>Alamat: <br>Poncowati, Lampung Tengah, Lampung</p>
                    <p>No HP : <br>085156405969</p>
                </div>

                <div class="biodata2 col-lg-4">
                    <p>Email: <br>yusufrizkyyuhansyah34@gmail.com</p>

                    <table class="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Sekolah</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_skl as $skl)
                                <tr>
                                    <td>{{ $skl['id'] }}</td>
                                    <td>{{ $skl['nama_sekolah'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
        <br>
        <br>

    </div>

</body>

</html>
