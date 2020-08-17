<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                {{--<h5 class="modal-title text-center w-100 font-weight-bold py-2" >Заявка</h5>--}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 40px;">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('image/catalog_1.jpg') }}" class="w-100 "
                             alt="photo">
                    </div>
                    <div class="col-7">
                        <h3 class="font-weight-bold">Пано</h3>
                        <div class="py-4">
                            <p class="">
                                Минимальный размер стекла для криволинейного фацета
                            </p>
                        </div>
                        <p>Цена: 30 000 сом</p>
                        <p>Размер: 150 на 150 мм</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary take-info">Подробнее</button>
            </div>
        </div>
    </div>
</div>
