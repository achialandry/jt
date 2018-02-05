<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome Icons  -->
    <!-- <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> -->

    <!-- Carousel   -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

    <!-- AOS CSS scripts  -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

    <!-- Custom CSS scripts  -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- flavicon -->
    <link rel="shortcut icon" href="{{{ asset('img-assets/favicon-16x16.png') }}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav  class="navbar navbar-expand-md navbar-dark fixed-top bg-dark  py-1">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img-assets/JTA_logo-min.png') }}" width="90" height="90" class="d-inline-block align-top" alt="Jay Taylor & Associates Logo" /> <a href="{{ url('/') }}" class="text-light d-inline-block align-top" style="text-decoration:none; font-weight:bold;">J. Taylor & Associates Ltd</a></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fill justify-content-end" id="navbarCollapse">
                  <ul class="navbar-nav ml-auto  ">
                    <li class="nav-item">
                      <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="{{ url('/') }}/#services">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/') }}/#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/') }}/#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/') }}/#contact">Contact</a>
                    </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Client Login</a></li>

                        @else
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item">
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav><br><br><br>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
