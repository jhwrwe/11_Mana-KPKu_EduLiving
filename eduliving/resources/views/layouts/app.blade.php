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

        /* Set background image */
        .container {
            position: relative;
            /* Relative positioning for absolute positioning of child elements */
        }

        .image-container {
            z-index: 0;
            position: relative;
            /* Required for z-index to work */
            height: 140vh;
            /* Set height to 100% of viewport height */
            overflow-x: hidden;
            /* Hide horizontal overflow */
            overflow-y: auto;
            /* Use auto for more detailed scrolling */
            background-image: url('images/mapkbs.jpg');
            background-size: cover;
            /* Cover the entire container */
            /* Center the background image */
            width: 100%;
            /* Set width to 100% of viewport width */
        }

        .circle-button1 {
            position: absolute;
            /* Absolute positioning */
            top: 80%;
            /* Position at the vertical center */
            left: 30%;
            /* Position at the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the button */
            width: 50px;
            /* Adjust the width and height for the size of the circle */
            height: 50px;
            background-color: #ee0b0b;
            /* Change background color as desired */
            border-radius: 50%;
            /* Make it a circle */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 1;
            /* Ensure the button is above the image */
        }

        .circle-button1:hover {
            background-color: #0056b3;
            /* Change hover background color as desired */
        }

        .circle-button1 a {
            color: white;
            /* Change text color as desired */
            text-decoration: none;
            font-weight: bold;
        }

        .circle-button2 {
            position: absolute;
            /* Absolute positioning */
            top: 140%;
            /* Position at the vertical center */
            left: 30%;
            /* Position at the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the button */
            width: 50px;
            /* Adjust the width and height for the size of the circle */
            height: 50px;
            background-color: #ee0b0b;
            /* Change background color as desired */
            border-radius: 50%;
            /* Make it a circle */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 1;
            /* Ensure the button is above the image */
        }

        .circle-button2:hover {
            background-color: #0056b3;
            /* Change hover background color as desired */
        }

        .circle-button2 a {
            color: white;
            /* Change text color as desired */
            text-decoration: none;
            font-weight: bold;
        }

        .circle-button3 {
            position: absolute;
            /* Absolute positioning */
            top: 80%;
            /* Position at the vertical center */
            left: 70%;
            /* Position at the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the button */
            width: 50px;
            /* Adjust the width and height for the size of the circle */
            height: 50px;
            background-color: #ee0b0b;
            /* Change background color as desired */
            border-radius: 50%;
            /* Make it a circle */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 1;
            /* Ensure the button is above the image */
        }

        .circle-button3:hover {
            background-color: #0056b3;
            /* Change hover background color as desired */
        }

        .circle-button3 a {
            color: white;
            /* Change text color as desired */
            text-decoration: none;
            font-weight: bold;
        }

        .circle-button4 {
            position: absolute;
            /* Absolute positioning */
            top: 140%;
            /* Position at the vertical center */
            left: 70%;
            /* Position at the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the button */
            width: 50px;
            /* Adjust the width and height for the size of the circle */
            height: 50px;
            background-color: #ee0b0b;
            /* Change background color as desired */
            border-radius: 50%;
            /* Make it a circle */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 1;
            /* Ensure the button is above the image */
        }

        .circle-button4:hover {
            background-color: #0056b3;
            /* Change hover background color as desired */
        }

        .circle-button4 a {
            color: white;
            /* Change text color as desired */
            text-decoration: none;
            font-weight: bold;
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




                    </ul>
                </div>



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

                                <li class="nav-item">
                                    <a class="nav-link" href="/adminuser">All Users</a>
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
