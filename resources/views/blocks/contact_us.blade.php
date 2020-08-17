<div class="container my-5 py-5 z-depth-1 " id="contact">
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text ">
        <style>
            .map-container {
                height: 280px;
                position: relative;
            }

            .map-container iframe {
                left: 0;
                top: 0;
                height: 100%;
                width: 100%;
                position: absolute;
            }
        </style>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="font-weight-bold">Нужна консультация?</h3>
                <p class="text-muted">Оставьте свои данные, в течении 15 минут мы Вам перезвоним</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-0 mb-md-0">
                <div id="map-container-google-1" class="z-depth-1 map-container mb-4">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A9318874c45b18167801986a5808829a00a191cb27add196225fc5bc505153366&amp;source=constructor"
                        width="376" height="344" frameborder="0"></iframe>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-4 mb-md-0">
                <div class="md-form md-outline mt-0">
                    <input type="text" id="form-subject" class="form-control">
                    <label for="form-subject">Имя</label>
                </div>
                <div class="md-form md-outline mt-3">
                    <input type="email" id="form-email" class="form-control">
                    <label for="form-email">E-mail</label>
                </div>
                <div class="md-form md-outline mb-3">
                    <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="form-message">Чем мы вам можем помочь?</label>
                </div>
                <button type="submit" class="btn btn-tempo  ml-0" style="padding: 13px 35px;">Отправить</button>
            </div>
        </div>
    </section>
</div>


