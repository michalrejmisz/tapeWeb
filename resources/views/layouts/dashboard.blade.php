<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - SB Admin</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color:#343a40">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="#" style="color:white">wTape</a>

</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Główne</div>
                    <a class="nav-link" href="{{route('admin')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Produkty
                    </a>
{{--                    <div class="sb-sidenav-menu-heading">Interface</div>--}}
{{--                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">--}}
{{--                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>--}}
{{--                        Layouts--}}
{{--                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">--}}
{{--                        <nav class="sb-sidenav-menu-nested nav">--}}
{{--                            <a class="nav-link" href="layout-static.html">Static Navigation</a>--}}
{{--                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">--}}
{{--                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>--}}
{{--                        Pages--}}
{{--                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">--}}
{{--                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">--}}
{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">--}}
{{--                                Authentication--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="login.html">Login</a>--}}
{{--                                    <a class="nav-link" href="register.html">Register</a>--}}
{{--                                    <a class="nav-link" href="password.html">Forgot Password</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                Error--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                        </nav>--}}
{{--                    </div>--}}

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Zalogowany jako:</div>
                Administrator
            </div>
        </nav>
    </div>
    <div class="mt-5" id="layoutSidenav_content">
        <main>
            @yield('content')

        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; wTape 2022</div>
                </div>
            </div>
        </footer>
    </div>
</div>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>--}}
{{--<script src="js/scripts.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>--}}
{{--<script src="assets/demo/chart-area-demo.js"></script>--}}
{{--<script src="assets/demo/chart-bar-demo.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>--}}
{{--<script src="js/datatables-simple-demo.js"></script>--}}
{{--    Datables--}}
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

@yield('js')
</body>
</html>
