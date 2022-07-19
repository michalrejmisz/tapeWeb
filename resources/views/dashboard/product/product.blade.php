@extends('layouts.dashboard')

@section('content')
    <div class="container">
{{--        Form Add product  --}}

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
            Dodaj produkt
        </button>



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
                        <form id="delete-product-form" method="POST" action="">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nie</button>
                            <button type="submit" class="btn btn-danger">Tak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Add product-->
        <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data" id="form">
            @csrf
            <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-header text-center">
                            <h4 class="modal-title" id="exampleModalLabel">Dodaj produkt</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="md-form mb-4">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu</label>
                                <input name="name" id="name" type="text" id="defaultForm-email" class="form-control validate">
                            </div>

                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Kategoria</label>
                                <select name="category_id" id="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Wybierz kategorię</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Opis produktu</label>
                                <textarea name="description" id="description" class="form-control validate" rows="5"></textarea>
                            </div>

                            <div class="md-form mb-4">
                                <label class="form-label" for="customFile">Dodaj zdjęcie</label>
                                <input name="image" type="file" class="form-control" id="image" />
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                            <button id="ajaxSubmit" class="btn btn-primary">Dodaj</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
{{--        End of modal form add product--}}
        <table class="table table-bordered data-table" id="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Zdjęcie</th>
                <th>Kategoria</th>
                <th>Akcja</th>
            </tr>
            </thead>
        </table>

{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--            @csrf--}}

{{--            <div class="row">--}}
{{--                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                    <div class="form-group">--}}
{{--                        <strong>Name:</strong>--}}
{{--                        <input type="text" name="name" class="form-control" placeholder="Name">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                    <div class="form-group">--}}
{{--                        <strong>Detail:</strong>--}}
{{--                        <textarea class="form-control" style="height:150px" name="description" placeholder="Detail"></textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="md-form mb-4">--}}
{{--                    <label data-error="wrong" data-success="right" for="defaultForm-email">Kategoria</label>--}}
{{--                    <select name="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">--}}
{{--                        <option selected>Wybierz kategorię</option>--}}
{{--                        <option value="1">One</option>--}}
{{--                        <option value="2">Two</option>--}}
{{--                        <option value="3">Three</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                    <div class="form-group">--}}
{{--                        <strong>Image:</strong>--}}
{{--                        <input type="file" name="image" class="form-control" placeholder="image">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </form>--}}
    </div>
@endsection

@section('js')
{{--<script src="http://code.jquery.com/jquery-3.3.1.min.js"--}}
{{--        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="--}}
{{--        crossorigin="anonymous">--}}
{{--</script>--}}
{{--<!-- Latest compiled and minified JavaScript -->--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
{{--<script>--}}
{{--    jQuery(document).ready(function(){--}}
{{--        jQuery('#ajaxSubmit').click(function(e){--}}
{{--            e.preventDefault();--}}
{{--            var name = jQuery("#name").val();--}}
{{--            var category_id = jQuery("#category_id").val();--}}
{{--            var description = jQuery("#description").val();--}}
{{--            jQuery.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}
{{--            jQuery.ajax({--}}
{{--                url: "{{route('products.store')}}",--}}
{{--                type: "POST",--}}
{{--                data: {--}}
{{--                    xD--}}
{{--                    name: name,--}}
{{--                    category_id: category_id,--}}
{{--                    description: description,--}}
{{--                    // image: jQuery('#image').val(),--}}
{{--                },--}}
{{--                dataType: 'json',--}}
{{--                success: function (data) {--}}

{{--                    $('#companydata').trigger("reset");--}}
{{--                    $('#modal-id').modal('hide');--}}
{{--                    Swal.fire({--}}
{{--                        position: 'top-end',--}}
{{--                        icon: 'success',--}}
{{--                        title: 'Success',--}}
{{--                        showConfirmButton: false,--}}
{{--                        timer: 1500--}}
{{--                    })--}}
{{--                    get_company_data()--}}
{{--                },--}}
{{--                error: function (data) {--}}
{{--                    console.log('Error......');--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--    --}}
{{--    --}}
{{--    --}}
{{--</script>--}}




<script type="text/javascript">

    $('#ajaxSubmit').on('submit',function(e){
        e.preventDefault();
        var formData = new FormData(this);
        let name = $('#name').val();
        let category_id = $('#category_id').val();
        let description = $('#description').val();
        let image = $('#image').val();

        $.ajax({
            url: "{{route('products.store')}}",
            type:"POST",
            data: formData,
            success:function(response){
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
                    jQuery('.alert-danger').hide();
                    $('#open').hide();
                    $('#addProduct').modal('hide');
                }
            },
            error: function(response) {
                $('#nameErrorMsg').text(response.responseJSON.errors.name);
                $('#emailErrorMsg').text(response.responseJSON.errors.email);
                $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                $('#messageErrorMsg').text(response.responseJSON.errors.message);
            },
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        console.log("test?")
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'image', name: 'image', render: function (data, type, full, meta) {
                        return "<img src=\"\\images\\product\\" + data + "\" height=\"100\"/>";
                    } },
                {data: 'xyz', name: 'xyz'},
                // {data: 'des', name: 'description'},
                {data: 'action', name: 'akcja', orderable: false, searchable: false},
            ]
        });
    });

//     $('body').on('click', '.delete', function () {
//         if (confirm("Delete Record?") == true) {
//             var id = $(this).data('id');
// // ajax
//             $.ajax({
//                 type:"POST",
//                 url: "dashboard/product/delete/"+id,
//                 data: { id: id},
//                 dataType: 'json',
//                 success: function(res){
//                     var oTable = $('#table').dataTable();
//                     oTable.fnDraw(false);
//                 }
//             });
//         }
//     });


//     $(document).ready(function() {
//         $('.delete-form').on('submit', function(e) {
//             e.preventDefault();
//
//             $.ajax({
//                 type: 'post',
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 },
//                 url: $(this).data('route'),
//                 data: {
//                     '_method': 'delete'
//                 },
//                 success: function (response, textStatus, xhr) {
//                     alert(response)
//                     window.location='/posts'
//                 }
//             });
//         })
// });
{{--    $(document).ready( function () {--}}
{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}
{{--        $('#datatable-crud').DataTable({--}}
{{--            processing: true,--}}
{{--            serverSide: true,--}}
{{--            ajax: "{{ url('companies') }}",--}}
{{--            columns: [--}}
{{--                { data: 'id', name: 'id' },--}}
{{--                { data: 'name', name: 'name' },--}}
{{--                { data: 'email', name: 'email' },--}}
{{--                { data: 'address', name: 'address' },--}}
{{--                { data: 'created_at', name: 'created_at' },--}}
{{--                { data: 'category_name', name: 'categories.name' },--}}
{{--                {data: 'action', name: 'action', orderable: false},--}}
{{--            ],--}}
{{--            order: [[0, 'desc']]--}}
{{--        });--}}
{{--        $('body').on('click', '.delete', function () {--}}
{{--            if (confirm("Delete Record?") == true) {--}}
{{--                var id = $(this).data('id');--}}
{{--// ajax--}}
{{--                $.ajax({--}}
{{--                    type:"POST",--}}
{{--                    url: "{{ url('delete-company') }}",--}}
{{--                    data: { id: id},--}}
{{--                    dataType: 'json',--}}
{{--                    success: function(res){--}}
{{--                        var oTable = $('#datatable-crud').dataTable();--}}
{{--                        oTable.fnDraw(false);--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
</script>
@endsection
