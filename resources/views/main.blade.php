@extends('layouts.layout')


@section('content')
    <div class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;">
        <div class="container">
            <div id="main-page-cards">
                    <div class="d-flex justify-content-center align-items-center mt-5"> <button class="btn btn-dark">NASZE KATEGORIE</button>
                    </div>
                    <div class="d-flex justify-content-center mt-3"> <span class="text text-center" style="color:black">Znajdź produkt<br>Dopasowany do Twoich potrzeb</span>
                    </div>
                    <div class="row mt-2 g-4">
                        <div class="col-md-3">
                            <div class="card p-1">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                        <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Pakowa</span> </div>
                                        <div> <img src="{{asset('images/categories/1.jpg')}}" height="100" width="100" /> </div>
                                        <a class="d-none" href="{{route('products_by_category', 1)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>Taśma </span> <span>z Nadrukiem</span> </div>
                                    <div> <img src="{{asset('images/categories/2.jpg')}}" height="100" width="100" /> </div>
                                    <a class="d-none" href="{{route('products_by_category', 2)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Magazynowa</span> </div>
                                    <div> <img src="{{asset('images/categories/3.jpg')}}" height="100" width="100" /> </div>
                                    <a class="d-none" href="{{route('products_by_category', 3)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Ostrzegawcza</span> </div>
                                    <div> <img src="{{asset('images/categories/4.jpg')}}" height="100" width="100" /> </div>
                                    <a class="d-none" href="{{route('products_by_category', 4)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2tr5">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>Taśma</span> <span>Specjalistyczna</span> </div>
                                    <div> <img src="{{asset('images/categories/5.jpg')}}" height="100" width="100" /> </div>
                                    <a class="d-none" href="{{route('products_by_category', 5)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>Folia</span> <span>Stretch</span> </div>
                                    <div> <img src="{{asset('images/categories/6.jpg')}}" height="100" width="100" /> </div>
                                    <a class="d-none" href="{{route('products_by_category', 6)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>Aplikatory</span> </div>
                                    <div> <img src="{{asset('images/categories/7.jpg')}}" height="100" width="100" /> </div>
                                    <a class="d-none" href="{{route('products_by_category', 7)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>Wszystko</span> </div>
                                    <div> <img src="{{asset('images/categories/8.jpg')}}" height="100" width="100" /> </div>
                                    <a class="d-none" href="{{route('products_all')}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <br>
    <br>

    <div id="main-page-contact-form">
        <div class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;">
{{--        <div class="py-5 test min-vh-100" style="background-color:#0a53be;height: 100%;">--}}
            {{--    <div class="b-example-divider"></div>--}}
            {{--        @yield('content')--}}



            <div class="container">

                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                        <span class="subheading">KONTAKT</span>
                        <span class="mb-4 h2">Skontaktuj się z nami</span>
{{--                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
                    </div>
                </div>

                <div class="row d-flex contact-info mb-5 gy-4">
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-signpost-fill"></span>
                            </div>
                            <h3 class="mb-4">Adres</h3>
                            <p>Os. Stefana Batorego 57, Poznań 60-687</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-telephone-fill"></span>
                            </div>
                            <h3 class="mb-4">Numer Kontaktowy</h3>
                            <p><a href="tel://48618249541">+ 48 61 824 9541</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-envelope-open-fill"></span>
                            </div>
                            <h3 class="mb-4">Adres Email</h3>
                            <p><a href="mailto:biuro@wtapes.pl">biuro@wtapes.pl</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-globe"></span>
                            </div>
                            <h3 class="mb-4">Strona</h3>
                            <p><a href="#">wtapes.pl</a></p>
                        </div>
                    </div>
                </div>



                <div class="row d-flex align-items-stretch g-0 block-9" style="display:flex;">
                    <div class="col-md-6 order-md-last">

                        <form method="POST" action="javascript:void(0)" id="ajax-contact-form" name="ajax-contact-form" class="bg-light p-5 contact-form h-100 gy-3">
                            {{ csrf_field() }}

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Twoje Imię" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); cursor: auto;" aria-describedby="validationTooltipUsernamePrepend">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="email" placeholder="Twój email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="subject" placeholder="Temat">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="phone" placeholder="Numer telefonu (opcjonalnie)" maxlength="9">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Wiadmość"></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="submit" value="Wyślij wiadomość" id="submit" class="btn btn-primary py-3 px-5">
                            </div>
                            <div id="message" class="alert alert-primary" role="alert" style="display:none;">Wiadomość została wysłana!</div>
                        </form>

                    </div>
                    <div class="col-md-6">
                        <div id="map" class="bg-white" style="position: relative; overflow: hidden;">
                            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Stefana%20Batorego%2057,%20Pozna%C5%84+(wTapes)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/farm-gps/">gps for tractors</a></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
        $(".clickableBox").click(function() {
            window.location = $(this).find("a").attr("href");
            return false;
        });


        if ($("#ajax-contact-form").length > 0) {
        $("#ajax-contact-form").validate({
        rules: {
        name: {
        required: true,
        maxlength: 100
        },
        email: {
        required: true,
        maxlength: 100,
        email: true,
        },
        subject: {
        required: true,
        maxlength: 100
        },
        message: {
        required: true,
        maxlength: 500
        },
        },
        messages: {
        name: {
        required: "Wprowadź imię i nazwisko",
        maxlength: "Przekroczono limit 100 znaków."
        },
        email: {
        required: "Wprowadź poprawny adres email",
        email: "Podaj poprawny adres email",
        maxlength: "Przekroczono limit 100 znaków.",
        },
        subject: {
        required: "Wprowadź tytuł wiadomości",
        maxlength: "Przekroczono limit 100 znaków."
        },
        message: {
        required: "Wprowadź treść wiadomości",
        maxlength: "Przekroczono limit 500 znaków."
        },
        },
        submitHandler: function(form) {
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $('#submit').prop('value', 'Proszę czekać...');
        $("#submit").attr("disabled", true);
        $.ajax({
        url: "{{route('contact.us.store')}}",
        type: "POST",
        data: $('#ajax-contact-form').serialize(),
        success: function( response ) {
        $('#submit').prop('value', 'Wyślij wiadomdość');
        $("#submit"). attr("disabled", false);
        $('#message').fadeIn('slow', function(){
        $('#message').delay(3000).fadeOut();
        });
        document.getElementById("ajax-contact-form").reset();
        }
        });
        }
        })
        }

@endsection
