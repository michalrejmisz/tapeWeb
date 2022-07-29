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
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .error{
            color: #FF0000;
        }
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
    <div id="navbar">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="{{asset('images/logo-dark.png')}}" width="200" height="50" alt="" />
    {{--                <span class="fs-3">Simple header</span>--}}
                </a>
                <nav class="stroke">
                    <ul class="nav nav-pills fs-5">
                        <li class="nav-item"><a href="/" class="nav-link {{request()->routeIs('main') ? 'active' : '' }}" aria-current="page">Strona Główna</a></li>
                        <li class="nav-item"><a href="{{route('products_all')}}" class="nav-link {{request()->routeIs('product') ? 'active' : '' }}">Produkty</a></li>
                        <li class="nav-item"><a href="{{request()->routeIs('main') ? '#main-page-about-us' : '/#main-page-about-us' }}" class="nav-link">O nas</a></li>
                        <li class="nav-item"><a href="{{request()->routeIs('main') ? '#main-page-contact-form' : '/#main-page-contact-form' }}" class="nav-link">Kontakt</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
</main>

<div style="background-color:#e0e3e3;height: 100%;">
{{--    class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;"--}}
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
                        <li><i class="bx bx-chevron-right"></i><a href="{{request()->routeIs('main') ? '#' : '/' }}">Strona Główna</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{request()->routeIs('products') ? '#' : '/products' }}">Produkty</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{request()->routeIs('main') ? '#main-page-about-us' : '/#main-page-about-us' }}">O nas</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{request()->routeIs('main') ? '#main-page-contact-form' : '/#main-page-contact-form' }}">Kontakt</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nasze produkty</h4>
                    <ul>
                        @foreach ($categories as $category)
                            <li><i class="bx bx-chevron-right"></i> <a @if( request()->route('id') == $category->id ) href="#"  @else href="{{route('products_by_category', $category->id)}}" @endif>{{$category->name}}</a></li>
                        @endforeach
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt A</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt B</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt C</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt D</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Produkt E</a></li>--}}
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Skontaktuj się</h4>
                    <p> Os. Stefana Batorego 57 <br>
                        Poznań, 60-687<br>
                        <br>
                        <strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg></strong>  biuro@wtapes.pl<br>
                        <strong><img src="{{asset('images/icons8-phone-off-the-hook-16.png')}}" width="16" height="16" alt="" /></strong>  +48 61 824 9541<br>
                        <strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg></strong>  +48 531 247 722<br>
                        <strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg></strong>  +48  608 098 573<br>

                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>o wTapes</h3>
                    <p>Jesteśmy firmą oferującą taśmy. Znajdą Państwo u nas szeroką gamę produktów. </p>
{{--                    <div class="social-links mt-3">--}}
{{--                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>--}}
{{--                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
{{--                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>--}}
{{--                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--}}
{{--                    </div>--}}
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
<script type="text/javascript">
    @yield('javascript')
</script>


</body>
</html>
