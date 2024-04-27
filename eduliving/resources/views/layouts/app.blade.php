<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
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
            top: 45%;
            /* Position at the vertical center */
            left: 50%;
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
            top: 90%;
            /* Position at the vertical center */
            left: 25%;
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
            top: 90%;
            /* Position at the vertical center */
            left: 75%;
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
            top: 118%;
            /* Position at the vertical center */
            left: 50%;
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

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm align-items-center"
            style="height: 80px;background-color: rgb(44, 86, 0);">
            <div class="container-fluid d-flex align-items-center mx-auto">
                <a class="navbar-brand" href="#">
                    <img src="/images/zoo_logo.png" class="navbar-brand-image" alt="EduLiving" style="height: 50px;">
                </a>
                <h3 class="text-light mt-0 mb-0">EduLiving</h3>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="\home">Home</a>
                            </li>
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-black" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @if (Auth::user()->isUser())
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="\home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="\Find">Find</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="\Animals">Animals</a>
                                </li>
                            @endif
                            @if (Auth::user()->isAdmin())
                                <li class="nav-item">
                                    <a class="nav-link" href="/adminhome">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/animalsadmin">animals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/adminuser">All user</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/adminanimals">All Animal</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>


    </div>
    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
            var dropdownList = dropdownTriggerList.map(function(dropdownTriggerEl) {
                return new bootstrap.Dropdown(dropdownTriggerEl);
            });
        });
    </script>
</body>

</html>
