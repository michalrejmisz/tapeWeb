@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div id="left-column" class="py-3 col-xs-12 col-sm-4 col-md-3">
                <div class="category-top-menu">
                    <div class="pt-3 px-3 pb-1 bg-info"><p class="text-uppercase h6 pb-3 mb-2">Kategorie</p></div>
                        <ul class="category-sub-menu bg-white mx-1">
                            <li><a href="x">Taśma pakowa</a></li>
                            <li><a href="x">Taśma z nadrukiem</a></li>
                            <li><a href="x">Taśma magazynowa</a></li>
                            <li><a href="x">Taśma ostrzegawcza</a></li>
                            <li><a href="x">Taśma specjalistyczna</a></li>
                        </ul>
                </div>

            </div>
            <div class="py-3 col-xs-12 col-sm-8 col-md-9 ">

                    <div class="row">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="p-2 col-sm-12 col-md-6 col-lg-6 col-xl-4 zoomIn col-xs-12">
                                <div class="p-1 card shadow-sm">
                                    {{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumb</text></svg>--}}
                                    <img src="{{asset('images/tape.jpg')}}" height="200px" width="100%" class="p-5">
                                    <div class="card-body">
                                        <p class="card-text">Taśma klejąca o specjalnych właściwościach fizycznych.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Zobacz</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Zapytaj o cenę</button>
                                            </div>
                                            <small class="text-muted">10 zł</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2 col-sm-12 col-md-6 col-lg-6 col-xl-4 zoomIn col-xs-12">
                                <div class="p-1 card shadow-sm">
                                    {{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumb</text></svg>--}}
                                    <img src="{{asset('images/logo.png')}}" height="200px" width="100%" class="p-5">
                                    {{--                            <img src="{{asset('images/logo.png')}}" class="feaurette-image img-fluid mx-auto">--}}
                                    <div class="card-body">
                                        <p class="card-text">Taśma klejąca o specjalnych właściwościach fizycznych.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Zobacz</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Zapytaj o cenę</button>
                                            </div>
                                            <small class="text-muted">10 zł</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
            </div>
        </div>>
    </div>
@endsection
