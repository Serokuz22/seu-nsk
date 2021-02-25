@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <ul class="bread-crumbs">
        <li><a href="/"><b>Главная</b></a><span>/</span></li>
        <li>{{$page->head}}</li>
    </ul>
    <h1 class="page__title">{{$page->head}}</h1>
    <div class="content">
        {!! $page->content !!}
    </div>
</div>

@endsection
