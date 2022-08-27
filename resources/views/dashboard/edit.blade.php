<div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="alert alert-danger" style="display:none"></div>
            <div class="modal-header text-center">
                <h4 class="modal-title" id="exampleModalLabel">Edytuj produkt</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="" enctype="multipart/form-data" id="form-update">
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
