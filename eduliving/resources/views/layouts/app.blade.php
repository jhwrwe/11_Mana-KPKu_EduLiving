<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EduLiving') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom styles here */
        .navbar {
            background-color: rgb(44, 86, 0);
            transition: background-color 0.3s;
        }

        .navbar-brand img {
            height: 50px;
            width: auto;
        }

        .navbar-brand h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar-nav .nav-item .nav-link {
            color: #fff !important;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        footer {
            background-color: rgb(44, 86, 0);
            color: #fff;
            padding: 2rem 0;
        }

        footer p {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm align-items-center"
            style="height: 80px;background-color: rgb(44, 86, 0);">
            <div class="container-fluid d-flex align-items-center mx-auto">
                <a class="navbar-brand" href="#">
                    <img src="/images/logokmit.png" class="navbar-brand-image" alt="EduLiving" style="height: 50px;">
                </a>
                <a href="/home" style="text-decoration: none; color: inherit;">
                    <h3 class="text-light mt-0 mb-0">EduLiving</h3>
                </a>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        @auth


                    @if (Auth::user()->isAdmin())
                                <li class="nav-item">
                                    <a class="nav-link" href="/adminuser">All Users</a>
                                </li>

                        @endif
                         @endauth
                    </ul>
                </div>

                <a class="navbar-brand" href="#">
                    <img src="/images/_0b9d7ca0-ba1b-41d5-88b7-a5e2295d9277-removebg-preview-removebg-preview.png" alt="EduLiving">
                    <h3 class="d-inline">EduLiving</h3>
                </a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                            @if (Auth::user()->isAdmin())
                                <li class="nav-item">
                                    <a class="nav-link" href="/adminanimals">All Animals</a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Tentang Kami</h5>
                    <p>Kebun Binatang Surabaya merupakan tempat yang menyediakan pengalaman unik dan mendidik tentang keanekaragaman hayati.</p>
                </div>
                <div class="col-md-4">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li><a href="mailto:michaeldavidsin@gmail.com" class="text-white">michaeldavidsin@gmail.com</a></li>
                        <li><a href="tel:0815912599" class="text-white">0815912599</a></li>
                        <li>Universitas Ciputra Surabaya</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-center mb-0">© 2024 EduLiving. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
