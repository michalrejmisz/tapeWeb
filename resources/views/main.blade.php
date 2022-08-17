@extends('layouts.layout')


@section('content')
    <section class="d-flex min-vh-100 inline-block" id="slogan"  fetchpriority="high" style="background-image: url('{{asset('images/bgshutter1920_2233.webp')}}');">

        <div class="content--centered animated animatedFadeInUp fadeInUp">
            <div class="text-center preventOverflowContent">
                <h1 class="title--flex title animated fadeIn" style="color: white;">{{__("messages.tagline1")}}</h1>
                <h1 class="title--flex" style="color: white;">{{__("messages.tagline2")}}</h1>
                <a href="#main-page-products" class="smoothscroll btn btn--stroke text-center">  {{__("messages.seeproducts")}}</a>
            </div>
        </div>
    </section>



    <div id="main-page-products" class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;">
        <div class="container">
            <div id="main-page-cards" class="scrollFade">

                    <div class="d-flex justify-content-center align-items-center mt-5 heading-section"> <span class="subheading">{{__("messages.ourcategories")}}</span> </div>
                    <div class="d-flex justify-content-center heading-section mt-3"> <span class="text text-center mb-4 h2">{{__("messages.findproduct")}}<br>{{__("messages.productthatfit")}}</span></div>

                    <div class="row mt-2 g-4">
                        <div class="col-md-3">
                            <div class="card p-1">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                        <div class="flex-column lh-1 imagename"> <span>{{__("messages.packaging")}}</span> </div>
                                        <div> <img src="{{asset('images/categories/1.webp')}}" height="100" width="100" alt="{{__("messages.packaging")}}"/> </div>
                                        <a class="d-none" href="{{route('products_by_category', 1)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>{{__("messages.printed")}}</span> </div>
                                    <div> <img src="{{asset('images/categories/2.webp')}}" height="100" width="100" alt="{{__("messages.printed")}}"/> </div>
                                    <a class="d-none" href="{{route('products_by_category', 2)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>{{__("messages.stock")}}</span> </div>
                                    <div> <img src="{{asset('images/categories/3.webp')}}" height="100" width="100" alt="{{__("messages.stock")}}"/> </div>
                                    <a class="d-none" href="{{route('products_by_category', 3)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>{{__("messages.caution")}}</span> </div>
                                    <div> <img src="{{asset('images/categories/4.webp')}}" height="100" width="100" alt="{{__("messages.caution")}}"/> </div>
                                    <a class="d-none" href="{{route('products_by_category', 4)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2tr5">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>{{__("messages.specialist")}}</span> </div>
                                    <div> <img src="{{asset('images/categories/5.webp')}}" height="100" width="100" alt="{{__("messages.specialist")}}"/> </div>
                                    <a class="d-none" href="{{route('products_by_category', 5)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>{{__("messages.stretchwrap")}}</span> </div>
                                    <div> <img src="{{asset('images/categories/6.webp')}}" height="100" width="100" alt="{{__("messages.stretchwrap")}}"/> </div>
                                    <a class="d-none" href="{{route('products_by_category', 6)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>{{__("messages.applicators")}}</span> </div>
                                    <div> <img src="{{asset('images/categories/7.webp')}}" height="100" width="100" alt="{{__("messages.applicators")}}"/> </div>
                                    <a class="d-none" href="{{route('products_by_category', 7)}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between align-items-center p-2 clickableBox">
                                    <div class="flex-column lh-1 imagename"> <span>{{__("messages.all")}}</span> </div>
                                    <div> <img src="{{asset('images/categories/8.webp')}}" height="100" width="100" alt="{{__("messages.all")}}"/> </div>
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
                            <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#about-us" role="tab" aria-controls="v-pills-1" aria-selected="true" data-bs-toggle="list"><span class="mr-3 flaticon-ideas"></span>{{__("messages.about")}}</a>
                            <a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#our-offer" role="tab" aria-controls="v-pills-2" aria-selected="false" data-bs-toggle="list"><span class="mr-3 flaticon-flasks"></span>{{__("messages.ouroffer")}}</a>
                            <a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#x" role="tab" aria-controls="v-pills-3" aria-selected="false" data-bs-toggle="list"><span class="mr-3 flaticon-analysis"></span> {{__("messages.personalization")}}</a>
                            <a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#y" role="tab" aria-controls="v-pills-4" aria-selected="false" data-bs-toggle="list"><span class="mr-3 flaticon-web-design"></span> {{__("messages.contact")}}</a>
                        </div>
                    </div>

                    <div class="col-md-9 p-5 " style="min-height:650px;">
                        <div class="tab-content ps-md-5 my-4 animated animatedFadeInUp fadeInUp" id="nav-tabContent">
                            <span class="icon mb-3 d-block flaticon-ideas"></span>
                            <div class="tab-pane fade show active" id="about-us" role="tabpanel" aria-labelledby="about-us">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#filter-green" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">{{__("messages.about")}}</h2>
                                <p>
                                    {{__("messages.aboutustext")}}
                                </p>
                            </div>

                            <div class="tab-pane fade" id="our-offer" role="tabpanel" aria-labelledby="our-offer">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">{{__("messages.ouroffer")}}</h2>
                                <p>
                                    {{__("messages.offeredbyus")}}
                                <ul>
                                    <li>{{__("messages.packaging")}}</li>
                                    <li>{{__("messages.printedtape")}}</li>
                                    <li>{{__("messages.stock")}}</li>
                                    <li>{{__("messages.specialist")}}</li>
                                    <li>{{__("messages.painterstape")}}</li>
                                    <li>{{__("messages.caution")}}</li>
                                    <li>{{__("messages.dispensers")}}</li>
                                    <li>{{__("messages.stretchwrap")}}</li>
                                </ul>

                                </p>
                                <a class="btn btn-primary py-3 px-5 float-end " href="#" role="">{{__("messages.seeproducts")}}</a>
                            </div>

                            <div class="tab-pane fade" id="x" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">{{__("messages.personalization")}}</h2>
                                <p>
                                    {{__("messages.personalization.description")}}
                                </p>
                            </div>

                            <div class="tab-pane fade" id="y" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="p-2 ms-3" style="color:#04ccfc;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                </div>
                                <h2 class="mb-4">{{__("messages.contact")}}</h2>
                                <p>
                                    {{__("messages.contact.description")}}
                                </p>
                                <a class="btn btn-primary py-3 px-5 float-end my-5" href="#main-page-contact-form" role="">{{__("messages.writetous")}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <section id="main-page-contact-form" class="mt-5" style="padding-top:150px;">
        <div class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center">
                        <span class="subheading">{{__("messages.contactform.contact")}}</span>
                        <span class="mb-4 h2">{{__("messages.contactform.contactus")}}</span>
                    </div>
                </div>

                <div class="row d-flex contact-info mb-5 gy-4">
                    <div class="col-md-6 col-lg-3 d-flex animated animatedFadeInUp fadeInUp">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-signpost-fill"></span>
                            </div>
                            <h3 class="mb-4">{{__("messages.contactform.address")}}</h3>
                            <p>Os. Stefana Batorego 57, Poznań 60-687</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animated animatedFadeInUp fadeInUp">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-telephone-fill"></span>
                            </div>
                            <h3 class="mb-4">{{__("messages.contactform.contactnumber")}}</h3>
                            <p><a href="tel://48618249541">+ 48 61 824 9541</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animated animatedFadeInUp fadeInUp">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-envelope-open-fill"></span>
                            </div>
                            <h3 class="mb-4">{{__("messages.contactform.emailaddress")}}</h3>
                            <p><a href="mailto:biuro@wtapes.pl">biuro@wtapes.pl</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animated animatedFadeInUp fadeInUp">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bi bi-globe"></span>
                            </div>
                            <h3 class="mb-4">{{__("messages.contactform.website")}}</h3>
                            <p><a href="#">wtapes.pl</a></p>
                        </div>
                    </div>
                </div>



                <div class="row d-flex align-items-stretch g-0 block-9 bg-light" style="display:flex;">
                    <div class="col-lg-8 order-md-last">

                        <form method="POST" action="javascript:void(0)" id="ajax-contact-form" name="ajax-contact-form" class="bg-light ps-5 pe-5 py-5 contact-form h-100 gy-3">
                            {{ csrf_field() }}

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="{{__("messages.contact.form.yourname")}}" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); cursor: auto;" aria-describedby="validationTooltipUsernamePrepend">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="email" placeholder="{{__("messages.contact.form.yourmail")}}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="subject" placeholder="{{__("messages.contact.form.subject")}}">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="phone" placeholder="{{__("messages.contact.form.phonenumber")}}" maxlength="9">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="{{__("messages.contact.form.message")}}"></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3 d-flex">
                                <div class="pe-2">
                                    <input class="form-check-input" name="rodo" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                                <div>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{__("messages.rodo.checkbox")}}
                                        <a href="#my-modal" data-bs-target="#privacypolicy"data-bs-toggle="modal" style="color:black;"><u>{{__("messages.rodo.seedetails")}}</u></a>.
                                    </label>
                                </div>
                            </div>

                            <div class="form-group my-4 d-flex float-end">
                                <input type="submit" value="{{__("messages.contact.form.send.message")}}" id="submit" class="btn btn-primary py-3 px-5">
                            </div>
                            <div id="message" class="alert alert-primary" role="alert" style="display:none;">{{__("messages.contact.form.message.sent")}}</div>
                        </form>

                    </div>

                    <div class="col-md-4 d-none d-lg-flex align-items-center justify-content-center p-5">
                        <div class="contact1-pic js-tilt " data-tilt="" style="">
                            <img src="images/contact.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="quickview modal fade" id="privacypolicy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 text-center">
                    <h3 class="modal-title d-flex justify-content-center text-center">{{__("messages.rodo.title")}}</h3>
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    @include('rodo.documentpl')
                </div>

                <div class="modal-footer border-0">
                    <button class="btn btn-primary" data-bs-target="#form-product" data-bs-toggle="modal" data-bs-dismiss="modal">{{__("messages.rodo.back")}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
        const scrollHandler = () => {
        let menu = document.querySelector('#navbar')

        let A = document.getElementById('slogan')
        let B = document.getElementById('main-page-products')
        let C = document.getElementById('main-page-about-us')
        let D = document.getElementById('main-page-contact-form')
        let pos_menu = window.pageYOffset + menu.offsetHeight

        let pos_A = A.offsetTop + A.offsetHeight
        let pos_B = B.offsetTop + B.offsetHeight
        let pos_C = C.offsetTop + C.offsetHeight
        let pos_D = D.offsetTop + D.offsetHeight

        let distance_A = pos_A - pos_menu
        let distance_B = pos_B - pos_menu
        let distance_C = pos_C - pos_menu
        let distance_D = pos_D - pos_menu

        let min = Math.min(...[distance_A, distance_B, distance_C, distance_D].filter(num => num > 0))

        document.querySelectorAll('.nav-link')[0].classList.remove('active')
        document.querySelectorAll('.nav-link')[1].classList.remove('active')
        document.querySelectorAll('.nav-link')[2].classList.remove('active')
        document.querySelectorAll('.nav-link')[3].classList.remove('active')

        if(min === distance_A){
            document.querySelectorAll('.nav-link')[0].classList.add('active')

        }
        if(min === distance_B){
            document.querySelectorAll('.nav-link')[1].classList.add('active')
        }
        if(min === distance_C){
            document.querySelectorAll('.nav-link')[2].classList.add('active')
        }

        if(min === distance_D){
            document.querySelectorAll('.nav-link')[3].classList.add('active')
        }

        }

        window.addEventListener('scroll', scrollHandler)


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
        rodo: {
        required: true,
        },
        },
        messages: {
        name: {
        required: "{{__("messages.contact.form.validation.required.name")}}",
        maxlength: "{{__("messages.contact.form.validation.mexlength.100")}}",
        },
        email: {
        required: "{{__("messages.contact.form.validation.required.email")}}",
        email: "{{__("messages.contact.form.validation.required.email.wrong")}}",
        maxlength: "{{__("messages.contact.form.validation.mexlength.100")}}",
        },
        subject: {
        required: "{{__("messages.contact.form.validation.required.subject")}}",
        maxlength: "{{__("messages.contact.form.validation.mexlength.100")}}"
        },
        message: {
        required: "{{__("messages.contact.form.validation.required.message")}}",
        maxlength: "{{__("messages.contact.form.validation.mexlength.500")}}"
        },
        rodo: {
        required: "{{__("messages.contact.form.validation.required.rodo")}}",
        },
        },
        errorPlacement: function(error, element) {
        if(element.attr("name") == "rodo") {
        error.appendTo( element.parent("div").next("div") );
        } else {
        error.insertAfter(element);
        }
        },
        submitHandler: function(form) {
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $('#submit').prop('value', '{{__("messages.contact.form.please.wait")}}');
        $("#submit").attr("disabled", true);
        $.ajax({
        url: "{{route('contact.us.store')}}",
        type: "POST",
        data: $('#ajax-contact-form').serialize(),
        success: function( response ) {
        $('#submit').prop('value', '{{__("messages.contact.form.send.message")}}');
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

        $('.js-tilt').tilt({
        scale: 1.1
        });
@endsection

