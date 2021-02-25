<div class="page__header">
    <div class="container">
        <header class="header">
            <div class="logo">
                <a href="/"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
            </div>
            <nav class="menu">
                <ul>
                    <x-front-menu />
                </ul>
            </nav>
            <div class="mobile__hamburger">
                <div class="hamburger mobile-open"></div>
            </div>
        </header>
        <div class="header__contacts">
            <div class="header__contacts__inner">
                <a href="tel:{{$phone}}">{{$phone}}</a>
                <span>{{$address1}}
                    {{$address2}}</span>
            </div>
        </div>
    </div>
</div>
