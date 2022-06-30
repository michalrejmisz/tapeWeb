<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">


</head>
<body>
<main class="sticky-top shadow" style="background-color:#f8fafc">
    <div class="container" >
        <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="{{asset('images/logo-dark.png')}}" width="200" height="50" alt="" />
{{--                <span class="fs-3">Simple header</span>--}}
            </a>
            <nav class="stroke">
                <ul class="nav nav-pills fs-5">
                    <li class="nav-item"><a href="/" class="nav-link {{request()->routeIs('main') ? 'active' : '' }}" aria-current="page">Strona Główna</a></li>
                    <li class="nav-item"><a href="/product" class="nav-link {{request()->routeIs('product') ? 'active' : '' }}">Produkty</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">O nas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kontakt</a></li>
                </ul>
            </nav>
        </header>
    </div>
</main>

<div class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;">
{{--    <div class="b-example-divider"></div>--}}
    @yield('content')

</div>
{{--<div class="b-example-divider"></div>--}}
<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Nasz Newsletter</h4>
                    <p>Zapisz się do naszego newslettera</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subskrybuj">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Użyteczne Linki</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i><a href="#">Strona Główna</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkty</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">O nas</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Kontakt</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nasze produkty</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt A</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt B</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt C</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt D</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt E</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Skontaktuj się</h4>
                    <p> ul. X 1/2 <br>
                        Poznań, 61-XXX<br>
                        Polska <br>
                        <br>
                        <strong>Numer:</strong> +48 777 777 777<br>
                        <strong>Email:</strong> wtape@gmail.com<br>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>o wTapes</h3>
                    <p>Jesteśmy firmą oferującą taśmy. Znajdą Państwo u nas szeroką gamę produktów. </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>wTapes</span></strong>. Wszystkie prawa zastrzeżone </div> <div class="credits"> Designed by <a href="#">Michał Rejmisz</a>
        </div>
    </div>
</footer>
</body>
</html>
