<header>
    <nav class="navbar navbar-expand-lg navbar-dark black justify-content-between fixed-top">
        <div class="container pt-2">
            <a class="navbar-brand pt-0 pb-1" href="#"><img src="{{ asset('image/logo_facet.svg') }}"
                                                            alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{--                    <button class="btn btn-tempo mx-auto">Вызвать замерщика сейчас</button>--}}
                <ul class="nav navbar-nav text-center ml-auto text-uppercase">
                    {{--                    <li class="nav-item ">--}}
                    {{--                        <a class="nav-link " href="tel:+996550433745" >+996550433745</a>--}}
                    {{--                    </li>--}}
                    <li class="nav-item ">
                        <a class="nav-link" href="#catalog">Каталог </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">О нас?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Как мы работаем?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/facet_center/" class="nav-link"><i class="fab fa-instagram fa-lg fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="view intro-2">
        <div class="full-bg-img">
            <div class="mask rgba-black-strong flex-center">
                <div class="container">
                    {{--                    <div class="white-text text-center">--}}
                    {{--                        <h1>--}}
                    {{--                            Зеркальное пано <br> любой сложности <br> по Вашим размерам--}}
                    {{--                        </h1>--}}
                    {{--                        <div class="h2 text-uppercase text-center">Зеркальное панно</div>--}}
                    {{--                        <div class="h2 text-uppercase text-center">любой сложности</div>--}}
                    {{--                        <div class="h2 text-uppercase text-center">по Вашим размерам</div>--}}
                    {{--                    </div>--}}
                    <div class="page-screen-head__title-wrap">
                        <h1 class="page-screen-head__title">
                            <span class="page-screen-head__title-line" style="transform: matrix(1, 0, 0, 1, 0, 0);">ЗЕРКАЛЬНОЕ ПАНО </span><span
                                class="page-screen-head__title-line red-line-before"
                                style="transform: matrix(1, 0, 0, 1, 0, 0);">ЛЮБОЙ СЛОЖНОСТИ</span><span
                                class="page-screen-head__title-line" style="transform: matrix(1, 0, 0, 1, 0, 0);">ПО ВАШИМ РАЗМЕРАМ </span>
                        </h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

{{--@include('blocks.main')--}}
@push('scripts')
    <script type="text/javascript">
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
@endpush
