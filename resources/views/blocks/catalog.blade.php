<section class="py-5" id="catalog">
    <div class="container">
        <div class="row">
            <div class="col-12 headline headline_start-position">
                <div class="headline__left">
                    <div class="headline__title" style="transform: matrix(1, 0, 0, 1, 0, 0);">Каталог</div>
                </div>
                <div class="headline__right">
                    <div class="headline__add-text" style="transform: matrix(1, 0, 0, 1, 0, 0);">Фацетированные зеркала - это элегантно
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 py-4">
                <a href="" data-toggle="modal" data-target="#product"><img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog" ></a>
            </div>
            <div class="col-12 col-lg-4 py-4">
                <a href="" data-toggle="modal" data-target="#product1"><img src="{{ asset('image/catalog_2.jpg') }}"  class="img-fluid" alt="catalog"></a>
            </div>
            <div class="col-12 col-lg-4 py-4">
                <a href=""><img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog"></a>
            </div>
            <div class="col-12 col-lg-4 py-4">
                <a href=""><img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog"></a>
            </div>
            <div class="col-12 col-lg-4 py-4">
                <a href=""><img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog"></a>
            </div>
            <div class="col-12 col-lg-4 py-4">
                <a href=""><img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog"></a>
            </div>
{{--            2--}}
{{--            <div class="col-12 col-lg-3 ">--}}
{{--                <img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog">--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-3 ">--}}
{{--                <img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog">--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-3 ">--}}
{{--                <img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog">--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-3 ">--}}
{{--                <img src="{{ asset('image/catalog_1.jpg') }}"  class="img-fluid" alt="catalog">--}}
{{--            </div>--}}

        </div>
    </div>
</section>
@include('modal.product')
@include('modal.application')
@push('scripts')
    <script>
        $('.take-info').click( function () {
            $('#product').modal('hide');
            $('#product1').modal('hide');
            $('#product2').modal('hide');
            $('#product3').modal('hide');
            $('#product4').modal('hide');
            setTimeout(function () {
                $('#submit').modal('show');
            },100)
        })
    </script>
    <script type="text/javascript">
        function myFunction() {
            let checkBox = document.getElementById("myCheck");
            if (checkBox.checked == true){
                $('#accept').prop('disabled', false);
            } else {
                $('#accept').prop('disabled', true);
            }
        }
    </script>
@endpush
