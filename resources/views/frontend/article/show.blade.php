@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <ul class="bread-crumbs">
            <li><a href="/"><b>Главная</b></a><span>/</span></li>
            <li><a href="{{route('article.index')}}"><b>Статьи</b></a><span>/</span></li>
            <li>{{$article->head}}</li>
        </ul>
        <h1 class="page__title">{{$article->head}}</h1>
        <div class="content">
            {!! $article->content !!}
        </div>
    </div>

@endsection
