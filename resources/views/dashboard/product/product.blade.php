@extends('layouts.dashboard')

@section('content')
    <div class="container">
{{--        Form Add product  --}}

        <!-- Button trigger modal -->
        <button type="button" class="add-product btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProduct2">
            Dodaj produkt
        </button>

        <!-- Modal Product Added popup-->
        <div class="modal fade" id="productAdded" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-success">
                    <div class="modal-body" style="color:white;">
                        Dodano produkt!
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Product Added popup-->
        <div class="modal fade" id="productUpdated" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-warning">
                    <div class="modal-body" style="color:white;">
                        Zaktualizowano produkt!
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Product Deleted popup-->
        <div class="modal fade" id="productDeleted" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-body" style="color:white;">
                        Usunięto produkt!
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Add product-->
        <div class="modal fade" id="addProduct2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title" id="exampleModalLabel">Dodaj produkt</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="post" action="" enctype="multipart/form-data" id="ajax-form2">
                        @csrf
                        <div class="modal-body">
                                <input type="reset" value="Reset" hidden/>
                                <div class="d-flex">
                                    <div class="md-form mb-4 me-1 flex-fill">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu</label>
                                        <input name="name_pl" id="name_pl" type="text" class="form-control validate">
                                    </div>

                                    <div class="md-form mb-4 flex-fill">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu (ang)</label>
                                        <input name="name_en" id="name_en" type="text" class="form-control validate">
                                    </div>
                                </div>


                                <div class="d-flex">
                                    <div class="md-form mb-4 me-1 flex-fill">
                                        <i class="fas fa-lock prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Opis produktu</label>
                                        <textarea name="description_pl_add" id="description_pl_add" class="form-control ckeditor validate" rows="5"></textarea>
                                    </div>

                                    <div class="md-form mb-4 flex-fill">
                                        <i class="fas fa-lock prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Opis produktu(ang)</label>
                                        <textarea name="description_en_add" id="description_en_add" class="form-control ckeditor validate" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="md-form mb-4">
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Kategoria</label>
                                    <select name="category_id" id="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option value="" selected disabled hidden>Wybierz kategorię</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name_pl}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
                                    @enderror
                                </div>

                                <div class="md-form mb-4">
                                    <label class="form-label" for="customFile">Dodaj zdjęcie</label>
                                    <input name="image" type="file" class="form-control" id="image" />
                                </div>

                                Ukryty:
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hidden" id="inlineRadio1" value="0" checked>
                                    <label class="form-check-label" for="inlineRadio1">Nie</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hidden" id="inlineRadio2" value="1" >
                                    <label class="form-check-label" for="inlineRadio2">Tak</label>
                                </div>
                                <div class="alert alert-danger" style="display:none"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                            <button id="ajaxSubmit" class="btn btn-primary">Dodaj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


{{--        <button class="btn btn-danger delete-product-button" role="button" data-delete-link="{{route('product.delete', '1')}}" data-bs-toggle="modal" data-bs-target="#delete-product-modal">Usuń</button>--}}

        <!-- small modal -->
        <div class="modal fade" id="delete-product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Usuwanie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Czy na pewno chcesz usunąć produkt? </p>
                    </div>
                    <div class="modal-footer">
{{--                        <form id="delete-product-form" method="" action="">--}}
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nie</button>
                            <button type="submit" id="deleteButton" class="btn btn-danger">Tak</button>
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>



        <table class="table table-bordered data-table" id="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Zdjęcie</th>
                <th>Kategoria</th>
                <th>Ukryty</th>
                <th>Angielski</th>
                <th>Akcja</th>
            </tr>
            </thead>
        </table>

    </div>




    {{--  Modal EDIT PRODUCT --}}
    <div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
{{--                <div class="alert alert-danger" style="display:none"></div>--}}
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="exampleModalLabel">Edytuj produkt</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="post" action="" enctype="multipart/form-data" id="form-update2">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3 align-middle">
                                <img src="{{URL::asset('images/product/')}}" height="280" width="280"/>
                            </div>
                            <div class="col-9">
                                <input type="reset" value="Reset" hidden/>
                                <input id="id_prod" name="id_prod" value="" hidden>
                                <div class="d-flex">
                                    <div class="md-form mb-4 me-1 flex-fill">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu</label>
                                        <input name="name_pl" id="name_pl" type="text" class="form-control validate" value="">
                                    </div>

                                    <div class="md-form mb-4 flex-fill">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu (ang)</label>
                                        <input name="name_en" id="name_en" type="text" class="form-control validate" value="">
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="md-form mb-4 me-1 flex-fill">
                                        <i class="fas fa-lock prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Opis produktu</label>
                                        <textarea name="description_pl" id="description_pl" class="form-control ckeditor validate" rows="5" value=""></textarea>
                                    </div>

                                    <div class="md-form mb-4 flex-fill">
                                        <i class="fas fa-lock prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Opis produktu(ang)</label>
                                        <textarea name="description_en" id="description_en" class="form-control ckeditor validate" rows="5" value=""></textarea>
                                    </div>
                                </div>

                                <div class="md-form mb-4">
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Kategoria</label>
                                    <select name="category_id" id="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option value=""></option>
                                        @foreach ($categories as $category)
{{--                                            @if($category_id != $category->id)--}}
                                                <option value="{{$category->id}}">{{$category->name_pl}}</option>
{{--                                            @endif--}}
                                        @endforeach
                                    </select>
                                </div>

                                <div class="md-form mb-4">
                                    <label class="form-label" for="customFile">Dodaj zdjęcie</label>
                                    <input name="image" type="file" class="form-control" id="image" />
                                </div>

                                Ukryty:
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hidden" id="inlineRadio1" value="0">
                                    <label class="form-check-label" for="inlineRadio1">Nie</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hidden" id="inlineRadio2" value="1">
                                    <label class="form-check-label" for="inlineRadio2">Tak</label>
                                </div>

                                <div class="alert alert-danger" style="display:none;">a</div>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                        <button id="ajaxSubmit" class="btn btn-primary">Aktualizuj</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')

{{--<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>--}}
<script src="//cdn.ckeditor.com/4.19.1/basic/ckeditor.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

<script type="text/javascript">
    // Draw table
    $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name_pl', name: 'name_pl'},
                {data: 'image', name: 'image', render: function (data, type, full, meta) {
                        return "<img src=\"\\images\\product\\" + data + "\" height=\"100\"/>";
                    } },
                {data: 'categoryName', name: 'categories.name_pl'},
                {data: 'hidden', name: 'hidden', render: function (data){
                        if(data == 0){
                            return "Nie";
                        }
                        if(data ==1){
                            return "Tak";
                        }
                    }},
                // {data: 'des', name: 'description'},
                {data: 'name_en', name: 'name_en', render: function(data){
                        if(data){
                            return "Tak"
                        }else {
                            return "NIe"
                        }
                    }},
                // {data: 'action', name: 'akcja', orderable: false, searchable: false},
                {data: 'id', name: 'test', orderable: false, searchable: false, render: function (data){
                        return '<button data-id="'+data+'" class="btn btn-success product-update me-1">Edytuj</button><button data-id="'+data+'" class="btn btn-danger product-delete">Usuń</button>';
                    }},
            ],
            language: {
                "sProcessing":    "Przetwarzanie...",
                "sLengthMenu":    "Pokaż _MENU_ rekordów",
                "sZeroRecords":   "Brak pasujących wyników",
                "sEmptyTable":    "Brak danych w tabeli",
                "sInfo":          "Wyświetlono od _START_ do _END_ z _TOTAL_ rekordów",
                "sInfoEmpty":     "Pokazuje  0 do 0 z 0 wpisów",
                "sInfoFiltered":  "(odfiltrowane z _MAX_ wszystkich wpisów)",
                "sInfoPostFix":   "",
                "sSearch":        "Szukaj:",
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Ładowanie...",
                "oPaginate": {
                    "sFirst":    "Pierwszy",
                    "sLast":    "Ostatni",
                    "sNext":    "Następny",
                    "sPrevious": "Poprzedni"
                },
                "oAria": {
                    "sSortAscending":  ": Włącz sortowanie kolumn rosnąco",
                    "sSortDescending": ":  Włącz sortowanie kolumn malejąco",
                }
            }
        });
    });
    // Add Product
    // $("body").on("click", ".add-product", function(event) {
    //     $("#ajax-form2").trigger('reset');
    //     CKEDITOR.instances['description_pl'].setData('');
    //     CKEDITOR.instances['description_en'].setData('');
    // });


    $('#ajax-form2').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append('description_en_add', CKEDITOR.instances['description_en_add'].getData())
        formData.append('description_pl_add', CKEDITOR.instances['description_pl_add'].getData())
        $('#file-input-error').text('');
        $.ajax({
            type:'POST',
            url: "{{route('products.store')}}",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: false,
            processData: false,
            success:function(result){
                if(result.errors)
                {
                    jQuery('.alert-danger').html('');
                    jQuery.each(result.errors, function(key, value){
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<li>'+value+'</li>');
                    });
                }
                else
                {
                    var oTable = $('#table').dataTable();
                    oTable.fnDraw(false);
                    jQuery('.alert-danger').hide();
                    $('#open').hide();
                    $('#addProduct2').modal('hide');
                    $("#ajax-form2").trigger('reset');
                    $('#ajax-form2 #description_pl').val('');
                    $('#ajax-form2 #description_pl').text('');
                    $('#ajax-form2 #description_pl').val('');
                    $('#ajax-form2 #description_pl').text('');
                    CKEDITOR.instances['description_pl_add'].setData('');
                    CKEDITOR.instances['description_en_add'].setData('');
                    $(function () {
                        $('#productAdded').modal('show');
                        setTimeout(function () {
                            $('#productAdded').modal('hide');
                        }, 1500);
                    });
                }
            },
            error: function(response) {
                // console.log(response)
                // $('#nameErrorMsg').text(response.responseJSON.errors.name_pl);
                // $('#emailErrorMsg').text(response.responseJSON.errors.email);
                // $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                // $('#messageErrorMsg').text(response.responseJSON.errors.message);
            },
        });
    });

    {{--$('#ajax-form').submit(function(e){--}}
    {{--    e.preventDefault();--}}
    {{--    var formData = new FormData(this);--}}
    {{--    let name_pl = $('#name_pl').val();--}}
    {{--    let name_en = $('#name_en').val();--}}
    {{--    let category_id = $('#category_id').val();--}}
    {{--    let description_pl = $('#description_pl').val();--}}
    {{--    let description_en = $('#description_en').val();--}}
    {{--    let image = $('#image').val();--}}

    {{--    $.ajax({--}}
    {{--        url: "{{route('products.store')}}",--}}
    {{--        type:"POST",--}}
    {{--        data: formData,--}}
    {{--        success:function(response){--}}
    {{--            if(result.errors)--}}
    {{--            {--}}
    {{--                jQuery('.alert-danger').html('');--}}

    {{--                jQuery.each(result.errors, function(key, value){--}}
    {{--                    jQuery('.alert-danger').show();--}}
    {{--                    jQuery('.alert-danger').append('<li>'+value+'</li>');--}}
    {{--                });--}}
    {{--            }--}}
    {{--            else--}}
    {{--                var oTable = $('#table').dataTable();--}}
    {{--                oTable.fnDraw(false);--}}
    {{--                jQuery('.alert-danger').hide();--}}
    {{--                $('#open').hide();--}}
    {{--                $('#addProduct2').modal('hide');--}}
    {{--                $("#ajax-form2").trigger('reset');--}}
    {{--            }--}}
    {{--        },--}}
    {{--        error: function(response) {--}}
    {{--            $('#nameErrorMsg').text(response.responseJSON.errors.name_pl);--}}
    {{--            $('#emailErrorMsg').text(response.responseJSON.errors.email);--}}
    {{--            $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);--}}
    {{--            $('#messageErrorMsg').text(response.responseJSON.errors.message);--}}
    {{--        },--}}
    {{--    });--}}
    {{--});--}}
</script>

<script type="text/javascript">

    $(document).ready(function(){
        $("body").on("click", ".product-update", function(event){
            $("#form-update2").trigger('reset');
            jQuery('.alert-danger').html('');
            jQuery('.alert-danger').hide();
            var product = $(this).data('id');
            var url = '{{ route("product.edit", ":id") }}';
            url = url.replace(':id', product);
            $.ajax({
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                dataType: 'json',
                data: {product: product},
                success: function(response){
                    $('.mod').html(response);
                    $('#editProduct #name_pl').val(response.name_pl);
                    $('#editProduct #id_prod').val(response.id);
                    $('#editProduct #name_en').val(response.name_en);
                    $('#editProduct #description_pl').val(response.description_pl);
                    $('#editProduct #description_pl').text(response.description_pl);
                    $('#editProduct #description_pl').val(response.description_en);
                    $('#editProduct #description_pl').text(response.description_en);
                    $('#editProduct #category_id').val(response.category_id);
                    CKEDITOR.instances['description_pl'].setData(response.description_pl);
                    CKEDITOR.instances['description_en'].setData(response.description_en);
                    var img = '{{URL::asset('images/product/:img')}}'
                    img = img.replace(':img', response.image);
                    if (response.hidden == 0) {
                        document.querySelector('#form-update2 #inlineRadio1').checked = true;
                    } else if(response.hidden == 1) {
                        document.querySelector('#form-update2 #inlineRadio2').checked = true;
                    }
                    $("#editProduct img").attr("src", img);
                    $('#editProduct').modal('show');
                }
            });
        });
    });

    $('body').on('click', '.product-delete', function () {
        var id = $(this).data('id');
        $('#delete-product-modal').modal('show');
        $('#delete-product-modal').on('click', '#deleteButton', function() {
            // ajax
            $.ajax({
                type:"POST",
                url: "dashboard/product/delete/"+id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { id: id},
                dataType: 'json',
                success: function(res){
                    $('#delete-product-modal').modal('hide');
                    var oTable = $('#table').dataTable();
                    oTable.fnDraw(false);
                    $(function () {
                        $('#productDeleted').modal('show');
                        setTimeout(function () {
                            $('#productDeleted').modal('hide');
                        }, 1500);
                    });
                }
            });
        });
    });


</script>
<script type="text/javascript">
    // Update product
    $(document).ready(function () {
        $('#form-update2').submit(function(e) {
            let formData = new FormData(this);
            var id = formData.get('id_prod')
            var url = '{{ route("product.update", ":id") }}';
            url = url.replace(':id', id);
            e.preventDefault();
            $('#file-input-error').text('');
            $.ajax({
                type:'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                contentType: false,
                processData: false,
                success:function(result){
                    if(result.errors)
                    {
                        jQuery('.alert-danger').html('');
                        jQuery.each(result.errors, function(key, value){
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<li>'+value+'</li>');
                        });
                    }
                    else
                    {
                        var oTable = $('#table').dataTable();
                        oTable.fnDraw(false);
                        jQuery('.alert-danger').hide();
                        $('#open').hide();
                        $('#editProduct').modal('hide');
                        $("#form-update2").trigger('reset');
                        $(function () {
                            $('#productUpdated').modal('show');
                            setTimeout(function () {
                                $('#productUpdated').modal('hide');
                            }, 1500);
                        });

                    }
                },
                error: function(response) {
                    // console.log(response)
                    // $('#nameErrorMsg').text(response.responseJSON.errors.name_pl);
                    // $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    // $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                    // $('#messageErrorMsg').text(response.responseJSON.errors.message);
                },
            });
        });
    });

</script>



@endsection
