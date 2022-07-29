@extends('layouts.layout')


@section('content')
{{--    <div class="d-flex" id="slogan">--}}
{{--        <div class="min-vh-100 w-50 text-center aligns-items-center d-flex" style="background-color:white;">--}}
{{--            <h1 class="align-middle"><span>Z nami</span> się rozwiniesz</h1>--}}
{{--            <h1>Bo <span>jakość</span> ma znaczenie</h1>--}}
{{--        </div>--}}
{{--        <div class="min-vh-100 w-50" style="background-color:#04ccfc;"></div>--}}
{{--    </div>--}}



    <div id="main-page-products" class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;">
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


    <div id="main-page-about-us" class="mb-5">
        <div style="background-color:white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 py-4 nav-link-wrap" style="background-color:#04ccfc;margin-bottom:-50px; margin-top:-10px;">
                        <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#about-us" role="tab" aria-controls="v-pills-1" aria-selected="true" data-bs-toggle="list"><span class="mr-3 flaticon-ideas"></span> O nas</a>
                            <a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#our-offer" role="tab" aria-controls="v-pills-2" aria-selected="false" data-bs-toggle="list"><span class="mr-3 flaticon-flasks"></span> Nasze oferta</a>
                            <a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#x" role="tab" aria-controls="v-pills-3" aria-selected="false" data-bs-toggle="list"><span class="mr-3 flaticon-analysis"></span> Personalizacja</a>
                            <a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#y" role="tab" aria-controls="v-pills-4" aria-selected="false" data-bs-toggle="list"><span class="mr-3 flaticon-web-design"></span> Kontakt</a>
                        </div>
                    </div>

                    <div class="col-md-9 p-4 p-md-5" style="min-height:650px;">
                        <div class="tab-content ps-md-5 my-4" id="nav-tabContent">
                            <span class="icon mb-3 d-block flaticon-ideas"></span>
                            <div class="tab-pane fade show active" id="about-us" role="tabpanel" aria-labelledby="about-us">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#filter-green" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">O nas</h2>
                                <p>
                                    Od 2016 roku jesteśmy firmą specjalizującą się w taśmach pakowych oraz w taśmach z nadrukiem. W naszej ofercie każdy znajdzie coś dla siebie, a jeżeli nie – pomożemy w wyborze  Nie boimy się żadnych wyzwań, zawsze spróbujemy pomóc tak, aby sprostać Państwa oczekiwaniom. Każdy klient jest traktowany przez nas indywidualnie i zawsze może liczyć na naszą pomoc. Posiadamy wieloletnie doświadczenie w tej branży i do każdego zapytania podchodzimy z pełnym zaangażowaniem. Nasze produkty są wysokiej jakości czego dowodem są klienci wykorzystujący je w różnych kategoriach przemysłu.
                                </p>
                            </div>

                            <div class="tab-pane fade" id="our-offer" role="tabpanel" aria-labelledby="our-offer">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">Nasza oferta</h2>
                                <p>
                                    Oferowane przez nas produkty:
                                <ul>
                                    <li>taśma pakowa</li>
                                    <li>taśma z nadrukiem (wykonana indywidualnie pod potrzeby klienta)</li>
                                    <li>taśma magazynowa</li>
                                    <li>taśma specjalistyczna</li>
                                    <li>taśma malarska</li>
                                    <li>taśma ostrzegawcza</li>
                                    <li>dyspensery</li>
                                    <li>folia stretch</li>
                                </ul>

                                </p>
                                <a class="btn btn-primary py-3 px-5 my-5 float-end " href="#" role="">Zobacz produkty</a>
                            </div>

                            <div class="tab-pane fade" id="x" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">Personalizacja</h2>
                                <p>
                                    Taśmy pakowe oraz taśmy z nadrukiem proponujemy w różnych długościach oraz szerokościach, by jak najlepiej zabezpieczyć Państwa przesyłki. Cieszymy się, że możemy pomagać innym przedsiębiorcom wykonując taśmy z nadrukiem, które znakomicie reklamują daną firmę oraz zapadają w pamięci wielu osób ;-)
                                </p>
                            </div>

                            <div class="tab-pane fade" id="y" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">Kontakt</h2>
                                <p>
                                    Zapraszamy do odwiedzenia naszej strony internetowej i zapoznania się z naszym asortymentem. W przypadku jakichkolwiek pytań – bardzo prosimy o kontakt! Zapewniamy, że postaramy się rozchwiać wszelkie wątpliwości i z przyjemnością pomożemy! Przekonaj się już dziś – napisz do nas! ;-)
                                </p>
                                <a class="btn btn-primary py-3 px-5 float-end my-5" href="#main-page-contact-form" role="">Napisz do nas!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div id="main-page-contact-form" class="mt-5" style="padding-top:150px;">
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
