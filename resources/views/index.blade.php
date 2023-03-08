<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>

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

    <div class="container">
        <div class="mt-5">
            <h1>Halo Saya</h1>
            <h2>Yusuf Rizky Yuhansyah</h2>
        </div>

        <img class="myimg" src="/images/32._YUSUF_RIZKY_YUHANSYAH (3).jpg" width="300" height="auto"
            alt="self">

        <h4 class="mt-4">Saya adalah mahasiswa Universitas Lampung jurusan Teknik Informatika </h4> <br>
        <p>
            <a class="btn btn-primary btn-lg" href="{{ url('about') }}">About Me</a>
        </p>
    </div>

    </div>

</body>

</html>
