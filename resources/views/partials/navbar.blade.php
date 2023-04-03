<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
        <a class="navbar-brand" href="/home">CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                <li class="nav-item">
                    <a class="nav-link active mt-2" aria-current="page" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mt-2" href="{{ route('category') }}">Kategori</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active mt-2" href="{{ route('product') }}">Produk</a>
              </li>
            </ul>
            <ul class="navbar-nav d-flex">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hallo, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                          
                            <li><a class="dropdown-item" dropdown-bg: black; href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
