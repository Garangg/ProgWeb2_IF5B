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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Styles -->
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* 100% of the viewport height */
        }

        footer {
            margin-top: auto;
            /* Push the footer to the bottom */
            background-color: #f8f9fa;
            /* You can set the background color of the footer */
            padding: 1rem;
            /* Add some padding to the footer */
        }

        .image-book {
            width: 100%;
            /* This will make the image take the full width of its container */
            height: 550px;
            /* This sets a fixed height */
            object-fit: cover;
            /* This makes the image cover the entire width and height while maintaining its aspect ratio */
        }

        .mx-auto {
            padding-top: 10%;
            width: 100%;
            max-width: 1200px;
        }

        .pagination {
            font-size: 0.875rem;
            /* Adjust this value as needed */
        }
    </style>

    @stack('scripts')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm d-lg-flex justify-content-between">
            <div class="container-fluid ">
                <!-- Left Side Of Navbar -->
                <div class="d-flex justify-content-start">
                    <ul class="navbar-nav me-auto">
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{ __('BukuKu') }}
                        </a>
                    </ul>
                </div>

                @auth
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <!-- Center Of Navbar -->
                        <ul class="navbar-nav d-flex">
                            <div class="d-flex justify-content-center align-items-center">
                                <ul class="navbar-nav col-lg-6 justify-content-lg-center text-center">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('books') }}">Book</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">About</a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                @endauth

                <!-- Right Side Of Navbar -->
                <div class="d-flex justify-content-end">
                    <ul class="navbar-nav">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('loginForm') }}">{{ __('Login') }}</a>
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
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="content">
            @yield('content')
        </main>

        <footer class="py-3 bg-body-tertiary">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Books</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 BukuKu, Inc</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
