@extends('layouts.app')
@section('title-block')Главная страница@endsection
@section('content')
    @include('blocks.about_us')
    @include('blocks.advantages')
    @include('blocks.catalog')
    @include('blocks.how_we_are_working')
    @include('blocks.contact_us')
    <div id="popup__toggle2" data-toggle="modal" data-target="#submit">
        <div class="circlephone2" style="transform-origin: center;"></div>
        <div class="circle-fill2" style="transform-origin: center;"></div>
        <div class="img-circle2" style="transform-origin: center;">
            <div class="img-circleblock2 d-flex align-items-center"
                 style="transform-origin: center; background-color: #000;"><i
                    class="fas fa-phone mx-auto fa-2x text-white"></i></div>
        </div>
    </div>
@endsection


