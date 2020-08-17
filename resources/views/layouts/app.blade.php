<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>
<body>
    @include('inc.header')

@yield('content')


@include('inc.footer')
{{--@include('modal.application')--}}
{{--@include('modal.product')--}}
{{--@include('modal.product1')--}}
{{--@include('modal.product2')--}}
{{--@include('modal.product3')--}}
{{--@include('modal.product4')--}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mdb.min.js') }}"></script>
@stack('scripts')
    <script>
        $('#accept').click(function () {
            var name = $('#inputName').val();
            var phone = $('#telephone').val();

            if (name == '' || phone == '') {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Заполните поля',
                });
            }
            else {
                $.ajax({
                    url: '{{ route('send') }}',
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "name": name,
                        "phone": phone
                    },
                    success: data => {
                        if (data.check == 1){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Заявка отправлена',
                            });
                            $('#submit').modal('hide');;
                            $('#inputName').val('');
                            $('#telephone').val('');
                        }
                        else if (data.check == 0) {
                            Swal.fire({
                                position: 'center',
                                icon: 'info',
                                title: 'Вы уже отправляли заявку',
                            });
                            $('#submit').modal('hide');
                            $('#inputName').val('');
                            $('#telephone').val('');
                        }
                    },
                    error: () => {
                    }
                });
            }
        })
    </script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#pick").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 700);
        });
    });
</script>
</body>
</html>


