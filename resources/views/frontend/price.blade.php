@extends('frontend.layouts.app')

@section('content')
        <div class="container">
            <ul class="bread-crumbs">
                <li><a href="#"><b>Главная</b></a><span>/</span></li>
                <li>Услуги и цены</li>
            </ul>
            <h1 class="page__title">Услуги и цены</h1>
            <div class="price-list">
                @foreach($prices as $item)
                    @include('frontend.include.price_item')
                @endforeach
            </div>
            <div class="price__btn">
                <a class="btn-modal" href="#" data-toggle="modal" data-target="#modal">Отправить заявку</a>
            </div>
        </div>

@endsection
