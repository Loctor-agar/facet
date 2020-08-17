<div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title text-center w-100 font-weight-bold py-2" >Заявка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 40px;">
                <div class="form-label-group">
                    <label for="inputName">Имя</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Введите имя" required="" autofocus="">
                </div>
                <div class="form-label-group pt-4">
                    <label for="telephone">Номер телефона</label>
                    <input type="text" id="telephone" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43' placeholder="Введите номер телефона" required="" autofocus="">
                </div>

                <div class="custom-control custom-checkbox pt-3">
                    <input type="checkbox" class="custom-control-input" id="myCheck" onclick="myFunction()">
                    <label class="custom-control-label" for="myCheck">Принять <a href="" target="_blank">пользовательское соглашение</a></label>
                </div>
                <div class="pt-4 text-center">
                    <button type="button" id="accept" class="btn-modal btn" disabled>Отправить</button>
                </div>
                {{--<div class="pt-2 text-center">--}}
                {{--<button id="accept" type="button" class="btn btn-success" style="display:none">Принимаю</button>--}}
                {{--<button id="reject" type="button" class="btn btn-danger" style="display:none">Не принимаю</button>--}}
                {{--</div>--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
