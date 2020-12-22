<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ url('/') }}">
                    {{--                    <img src="{{ asset('img/logo.png') }}" alt="" title="" />--}}
                    <h3 class="text-pink">SIFOGA</h3>
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="nav-link"><a href="{{empty(Auth::user()->name) ? "/soal-latihan" : "/buka-soal"}}">Soal</a></li>
                    <li class="nav-link"><a href="{{empty(Auth::user()->name) ? "/penyakit" : "/buka-penyakit"}}">Konsultasi Penyakit</a></li>
                    <li class="nav-link"><a href="{{empty(Auth::user()->name) ? "/materi" : "/buka-materi"}}">Materi</a></li>
                    <li>
                        <a class="nav-link" href="/logout" style="display: {{!empty(Auth::user()->name) ? "block" : "none"}}">Logout</a>
                        <a class="nav-link" href="/login" style="display: {{empty(Auth::user()->name) ? "block" : "none"}}">Login</a>
                    </li>

                </ul>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">



                    </ul>

                </div>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

@yield('contentnya')


<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/hoverIntent.js') }}"></script>
<script src="{{ asset('js/superfish.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--  <head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    @yield('styling')--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

{{--    <title></title>--}}
{{--  </head>--}}
{{--  <body>--}}
{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--  <a class="navbar-brand" href="#">LOGO</a>--}}
{{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--    <span class="navbar-toggler-icon"></span>--}}
{{--  </button>--}}

{{--  <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--    <ul class="navbar-nav mr-auto">--}}
{{--      <li class="nav-item">--}}
{{--        <a  class="nav-link" href="{{empty(Auth::user()->name) ? "/materi" : "/buka-materi"}}">Materi  <span class="sr-only">(current)</span></a>--}}
{{--      </li><li class="nav-item">--}}
{{--        <a  class="nav-link" href="{{empty(Auth::user()->name) ? "/soal-latihan" : "/buka-soal"}}">Soal <span class="sr-only">(current)</span></a>--}}
{{--      </li>--}}


{{--    </ul>--}}
{{--    <a class="nav-link" href="/logout" style="display: {{!empty(Auth::user()->name) ? "block" : "none"}}">LOGOUT</a>--}}
{{--    <a class="nav-link" href="/login" style="display: {{empty(Auth::user()->name) ? "block" : "none"}}">Login</a>--}}

{{--  </div>--}}
{{--</nav>--}}



{{--@yield('contentnya')--}}



{{--    <!-- Optional JavaScript -->--}}
{{--    <!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
{{--  </body>--}}
{{--</html>--}}
