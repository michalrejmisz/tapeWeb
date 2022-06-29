@extends('layouts.layout')


@section('content')
    <div class="container">
        <div id="main-page-cards">
    {{--        <div class="vw-10 vh-100" style="background:red">Width 100vw</div>--}}
    {{--        <div class="vw-30">Width 100vw</div>--}}
    {{--        <nav class="navbar navbar-expand-lg navbar-light">--}}
    {{--            <div class="container-fluid">--}}
    {{--                <a class="navbar-brand name" href="#">Favy.com</a>--}}
    {{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                    <span class="navbar-toggler-icon"></span>--}}
    {{--                </button>--}}
    {{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link active" aria-current="page" href="#">About</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link" href="#">Categories</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link" href="#">Blog</a>--}}
    {{--                        </li>--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link" href="#">Contact</a>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                    <form class="d-flex  searchitem">--}}
    {{--                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
    {{--                        <i class="fa fa-search"></i>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </nav>--}}



            <div class="d-flex justify-content-center align-items-center mt-5"> <button class="btn btn-dark">NASZE KATEGORIE</button>
            </div>
            <div class="d-flex justify-content-center mt-3"> <span class="text text-center" style="color:white">Znajdź produkt<br>Dopasowany do Twoich potrzeb</span>
            </div>
            <div class="row mt-2 g-4">
                <div class="col-md-3">
                    <div class="card p-1">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Pakowa</span> </div>
                            <div> <img src="{{asset('images/categories/1.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Taśma </span> <span>z Nadrukiem</span> </div>
                            <div> <img src="{{asset('images/categories/2.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Magazynowa</span> </div>
                            <div> <img src="{{asset('images/categories/3.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Ostrzegawcza</span> </div>
                            <div> <img src="{{asset('images/categories/4.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2tr5">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Specjalistyczna</span> </div>
                            <div> <img src="{{asset('images/categories/5.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Folia</span> <span>Stretch</span> </div>
                            <div> <img src="{{asset('images/categories/6.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Aplikatory</span> </div>
                            <div> <img src="{{asset('images/categories/7.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> <span>Wszystko</span> </div>
                            <div> <img src="{{asset('images/categories/8.jpg')}}" height="100" width="100" /> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
