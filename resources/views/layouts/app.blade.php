<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>sTOR</title>
    <link rel="icon" type="image/png" sizes="32x32" href="logo1.png">

<!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex" href="{{ url('/') }}">
                <div><img src="logo1.png" class="logo"></div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="categoria">Todos los productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="oferta">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="snows">Snows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="esquis">Esquis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="botas">Botas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ropa">Ropa</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" action="buscador" enctype="multipart/form-data" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                           name="buscador" id="buscador">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <a class="nav-link" href="cesta"><img src="bag.png" class="carrito_compra"></a>
                <!--comentari inicial-
                        <a class="nav-link" href="login1">Login</a>
                        <a class="nav-link" href="register1">Register</a>

                        comentari final-->

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!--codi administrador-->
                                @if( Auth::user()->esAdmin == 1)
                                    <a class="dropdown-item" href="administrador">Administrador</a>
                            @endif
                            <!--final codi administrador-->

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <hr>
    <nav class="footer">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm justify-content-center">
            <a href="https://www.instagram.com" target="_blank"><img src="insta.png" class="img-fluid p-3"
                                                                     alt="instagram" width="80px"></a>
            <a href="https://www.facebook.com" target="_blank"><img src="face.png" class="img-fluid p-3" alt="facebook"
                                                                    width="80px"></a>
            <a href="https://www.youtube.com" target="_blank"><img src="youtube.png" class="img-fluid p-3" alt="youtube"
                                                                   width="80px"></a>
            <a href="https://twitter.com/explore" target="_blank"><img src="twitter.png" class="img-fluid p-3"
                                                                       alt="twitter" width="80px"></a>
        </nav>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</body>
</html>

