<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>СЭЗ — Главная страница</title>
    <meta content="" name="author"/>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta name="theme-color" content="#39383b"/>
    <link rel="shortcut icon" href="{{asset('favicons/favicon.ico" type="image/x-icon')}}" />
    <link rel="apple-touch-icon" href="{{asset('favicons/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-touch-icon-152x152.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-touch-icon-180x180.png')}}" />
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/media.css')}}"/>
</head>

<body>
<div class="page">

    <x-front-head />
    <div class="page__main">
        <section class="layout">

@yield('content')

        </section>
    </div>

    <x-front-footer />
</div>

<x-front-mobile />

<script src="{{asset('js/jquery-2.2.4.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/core.js')}}"></script>
</body>
</html>

