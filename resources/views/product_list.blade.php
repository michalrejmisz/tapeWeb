@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="col">
                            <div class="card shadow-sm">
    {{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumb</text></svg>--}}
                                <img src="{{asset('images/tape.jpg')}}" height="200px" width="100%" clas="p-4">
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

                        <div class="col">
                            <div class="card shadow-sm">
                                {{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumb</text></svg>--}}
                                <img src="{{asset('images/logo.png')}}" height="200px" width="100%" class="p-4">
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
        </div>
    </div>
@endsection
