@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <ul class="bread-crumbs">
            <li><a href="/"><b>Главная</b></a><span>/</span></li>
            <li>Статьи</li>
        </ul>
        <h1 class="page__title">Статьи</h1>
        <div class="news">
            @foreach($articles as $item)
                @include('frontend.article.include.item')
            @endforeach

            {{!is_array($articles)?$articles->links('frontend.article.include.paginate'):''}}
        </div>
    </div>

@endsection
