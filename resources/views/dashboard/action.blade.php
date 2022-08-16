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
<form method="post" action="{{route('product.update', $id)}}" enctype="multipart/form-data" id="form-update-{{$id}}">
    @csrf
    <div class="modal fade" id="addProduct-{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="exampleModalLabel">Edytuj produkt</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 align-middle">
                            <img src="{{URL::asset('images/product/' . $image)}}" height="280" width="280"/>
                        </div>
                        <div class="col-9">
                            <input id="id_prod" name="id_prod" value="{{$id}}" hidden>
                            <div class="d-flex">
                                <div class="md-form mb-4 me-1 flex-fill">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu</label>
                                    <input name="name_pl" id="name_pl" type="text" class="form-control validate" value="{{$name_pl}}">
                                </div>

                                <div class="md-form mb-4 flex-fill">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Nazwa produktu (ang)</label>
                                    <input name="name_en" id="name_en" type="text" class="form-control validate" value="{{$name_en}}">
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="md-form mb-4 me-1 flex-fill">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Opis produktu</label>
                                    <textarea name="description_pl" id="description_pl" class="form-control validate" rows="5" value="{{$description_pl}}">{{$description_pl}}</textarea>
                                </div>

                                <div class="md-form mb-4 flex-fill">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Opis produktu(ang)</label>
                                    <textarea name="description_en" id="description_en" class="form-control validate" rows="5" value="{{$description_en}}">{{$description_en}}</textarea>
                                </div>
                            </div>

                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Kategoria</label>
                                <select name="category_id" id="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="{{$category_id}}">{{$categoryName}}</option>
                                    @foreach ($categories as $category)
                                        @if($category_id != $category->id)
                                            <option value="{{$category->id}}">{{$category->name_pl}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="md-form mb-4">
                                <label class="form-label" for="customFile">Dodaj zdjęcie</label>
                                <input name="image" type="file" class="form-control" id="image" />
                            </div>

                            Ukryty:
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hidden" id="inlineRadio1" value="0" @if($hidden == 0) checked @endif>
                                <label class="form-check-label" for="inlineRadio1">Nie</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hidden" id="inlineRadio2" value="1" @if($hidden == 1) checked @endif>
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
            </div>
        </div>
    </div>
</form>

