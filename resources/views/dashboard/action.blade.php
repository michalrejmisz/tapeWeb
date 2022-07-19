{{--<a href="{{ route('product.update',$id) }}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-success edit">--}}
{{--    Edytuj--}}
{{--</a>--}}
{{--Edytuj--}}
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProduct-{{$id}}">
    Edytuj
</button>
{{-- Usuń--}}
<button class="btn btn-danger delete-product-button" role="button" data-bs-toggle="modal" data-bs-target="#delete-product-modal-{{$id}}">Usuń</button>

{{--{{$category_name}}--}}

{{--<a href="javascript:void(0)" data-id="{{ $id }}" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">--}}
{{--    Usuń--}}
{{--</a>--}}

{{-- Usuń --}}
<div class="modal fade" id="delete-product-modal-{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form id="delete-product-form" method="POST" action="{{route('product.delete', $id)}}">
                    @csrf
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nie</button>
                    <button type="submit" class="btn btn-danger">Tak</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Edytuj--}}
<form method="post" action="{{route('product.update', $id)}}" enctype="multipart/form-data" id="form">
    @csrf
    <div class="modal fade" id="addProduct-{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="exampleModalLabel">Edytuj produkt</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="md-form mb-4">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu</label>
                        <input name="name" id="name" type="text" id="defaultForm-email" class="form-control validate" value="{{$name}}">
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
                        <textarea name="description" id="description" class="form-control validate" rows="5">{{$description}}</textarea>
                    </div>

                    <div class="md-form mb-4">
                        <label class="form-label" for="customFile">Dodaj zdjęcie</label>
                        <input name="image" type="file" class="form-control" id="image" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                    <button id="ajaxSubmit-{{$id}}" class="btn btn-primary">Zapisz</button>
                </div>
            </div>
        </div>
    </div>
</form>
