@extends('layouts.layout')

@section('content')
    <div class="py-5 test min-vh-100" style="background-color:#e0e3e3;height: 100%;">
        <div class="container">
            <div class="row">
                <div id="left-column" class="py-3 col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <div class="category-top-menu">
                        <div class="pt-3 px-3 pb-1 bg-info"><p class="text-uppercase h6 pb-3 mb-2">{{__("messages.categories")}}</p></div>
                            <ul class="category-sub-menu bg-white ps-4 pe-4 mx-1 py-2">
                                @foreach ($categories as $category)
                                    <li class="py-2"><a href="{{route('products_by_category', $category->id)}}" @if( request()->route('id') == $category->id ) class="active" @endif">@if(App::getLocale() == 'pl') {{$category->name_pl}} @elseif (App::getLocale() == 'en') {{$category->name_en}} @endif</a></li>
                                @endforeach
                            </ul>
                    </div>

                </div>
                <div class="py-3 col-xs-12 col-sm-8 col-md-8 col-lg-9 ">

                        <div class="row">
                            @foreach ($products as $product)
                                @if($product->hidden == 0)
                                    @if((App::getLocale() == 'pl' && isset($product->name_pl)) or (App::getLocale() == 'en' && isset($product->name_en)))
                                        <div class="p-2 col-sm-12 col-md-12 col-lg-6 col-xxl-4 zoomIn col-xs-12">
                                            <div class="p-1 card shadow-sm">
                                                <div class="thumbnail text-center">
                                                    <img src="{{asset('images/product/'.$product->image)}}" class="p-1" alt="@if(App::getLocale() == 'pl') {{$product->name_pl}} @elseif(App::getLocale() == 'en') {{$product->name_en}} @endif">
{{--                                                    height="200px" width="100%"--}}
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text align-text-bottom" style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;line-clamp: 2;">@if(App::getLocale() == 'pl') {{$product->name_pl}} @elseif (App::getLocale() == 'en') {{$product->name_en}} @endif </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#view-detail-product-{{$product->id}}" class="btn btn-sm btn-outline-secondary">{{__("messages.categories.see")}}</button>
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#form-product" class="btn btn-sm btn-outline-secondary">{{__("messages.categories.askforprice")}}</button>
                                                        </div>
        {{--                                                <small class="text-muted">10 zł</small>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                </div>
            </div>>

            @foreach ($products as $product)
                @if($product->hidden == 0)
                    <div class="quickview modal fade" id="view-detail-product-{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-0 text-center">
                                    <h3 class="modal-title text-center">{{__("messages.categories.productdescription")}}</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="img-single-view m-5">
                                                <img class="" src="{{asset('images/product/'.$product->image)}}" alt="@if(App::getLocale() == 'pl') {{$product->name_pl}} @elseif (App::getLocale() == 'en') {{$product->name_en}}@endif">
                                            </div>
                                        </div>

                                        <div class="col-md-6 order-first order-md-last">
                                            <h1 class="h1 namne_details border-bottom-5 text-center mt-3">@if(App::getLocale() == 'pl') {{$product->name_pl}} @elseif (App::getLocale() == 'en') {{$product->name_en}} @endif </h1>
                                            <hr>
                                            <div class="h6 namne_details border-bottom-5">@if(App::getLocale() == 'pl') {!!$product->description_pl!!} @elseif (App::getLocale() == 'en') {!!$product->description_en!!} @endif </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button class="btn btn-primary" data-bs-target="#form-product" data-bs-toggle="modal" data-bs-dismiss="modal">{{__("messages.categories.askforprice")}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="quickview modal fade" id="form-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0 text-center">
                          <h3 class="modal-title d-flex justify-content-center text-center">{{__("messages.contact")}}</h3>
                            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>


                        <form method="POST" action="javascript:void(0)" id="ajax-contact-form" name="ajax-contact-form" class="bg-light p-5 contact-form h-100 gy-3">
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
{{--                                            @if ($errors->has('rodo'))--}}
{{--                                                <span class="text-danger">{{ $errors->first('rodo') }}</span>--}}
{{--                                            @endif--}}
                                        </label>
                                    </div>
                            </div>


                            <div class="form-group mb-3 float-end">
                                <input type="submit" value="{{__("messages.contact.form.send.message")}}" id="submit" class="btn btn-primary py-3 px-5" onclick="formsubmit()">
                            </div>
                            <div id="message" class="alert alert-primary" role="alert" style="display:none;">{{__("messages.contact.form.message.sent")}}</div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


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
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
        })

        function formsubmit(){
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
        email: "{{__("messages.contact.form.validation.required.email.wrongs")}}",
        maxlength: "{{__("messages.contact.form.validation.mexlength.100")}}",
        },
        subject: {
        required: "{{__("messages.contact.form.validation.required.subject")}}",
        maxlength: "{{__("messages.contact.form.validation.mexlength.100")}}"
        },
        message: {
        required: "{{__("messages.contact.form.validation.required.message")}}",
        maxlength: "{{__("messages.contact.form.validation.mexlength.500")}}",
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




@endsection
