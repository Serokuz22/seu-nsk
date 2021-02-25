@extends('frontend.layouts.app')

@section('content')

    <x-front-banners />

    <div class="points">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point1.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Разморозка <br> канализации</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point3.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Квартирные <br>засоры</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point5.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Гидродинамическая прочистка</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item ">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point7.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Пневмоимпульсная прочистка</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item ">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point9.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Аварийный <br>вызов</h6>
                        <a class="mask" href="#"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point2.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Прочистка на <br> предприятиях</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point4.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Дома, <br>коттеджи</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point6.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Электромеханическая прочистка</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point8.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Видеодиагностика</h6>
                        <a class="mask" href="#"></a>
                    </div>
                    <div class="points__item">
                        <div class="points__pic">
                            <img class="img-center" src="{{asset('img/content/point10.jpg')}}" alt="pic">
                        </div>
                        <h6 class="points__name">Устранение засоров <br> в канализации</h6>
                        <a class="mask" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="price">
        <div class="container">
            <h1 class="price__title">С нами выгодно!</h1>
            <div class="price__point">
                Устранение засора в квартире <span> от 100* руб. п.м.</span>
            </div>
            <div class="price__point">
                Устранение засора в частном доме, коттедже <span> от 200* руб. п.м.</span>
            </div>
            <div class="price__point">
                Устранение засора на предприятии<span> от 300* руб. п.м.</span>
            </div>
            <div class="price__point">
                Разморозка канализационного трубопровода- выгодно! эффективно!!!<span> от 400* руб. п.м.</span>
            </div>
            <div class="price__point">
                * При минимальной заявке 10 п.м<span></span>
            </div>
        </div>
    </div>
    <div class="clients">
        <div class="container">
            <h2 class="clients__title">С кем мы работаем</h2>
            <div class="clients__items d-md-flex flex-wrap align-self-center justify-content-start">
                <div class="clients__item d-lg-flex align-self-center align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients1.png')}}" alt="pic">
                    </div>
                    <span>Заводы, фабрики, комбинаты (производства пищевые и не пищевые)</span>
                </div>
                <div class="clients__item  d-lg-flex align-self-center justify-content-between align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients2.png')}}" alt="pic">
                    </div>
                    <span>ЖЭУ, ТСЖ, ЖКХ</span>
                </div>
                <div class="clients__item d-lg-flex align-self-center justify-content-between align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients3.png')}}" alt="pic">
                    </div>
                    <span>Учреждения здравоохранения</span>
                </div>
                <div class="clients__item d-lg-flex align-self-center justify-content-between align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients4.png')}}" alt="pic">
                    </div>
                    <span>Торговые центры, ТРЦ, досуг, развлечения</span>
                </div>
                <div class="clients__item d-lg-flex align-self-center justify-content-between align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients5.png')}}" alt="pic">
                    </div>
                    <span>Образовательные учреждения</span>
                </div>
                <div class="clients__item d-lg-flex align-self-center justify-content-between align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients6.png')}}" alt="pic">
                    </div>
                    <span>Предприятия общественного питания</span>
                </div>
                <div class="clients__item d-lg-flex align-self-center justify-content-between align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients7.png')}}" alt="pic">
                    </div>
                    <span>Предприятия энергетической <br> отрасли: ТЭЦ</span>
                </div>
                <div class="clients__item d-lg-flex align-self-center justify-content-between align-items-center justify-content-between">
                    <div class="clients__icon">
                        <img src="{{asset('img/clients8.png')}}" alt="pic">
                    </div>
                    <span>Гос. учреждения</span>
                </div>
            </div>
        </div>
    </div>
    <div class="awards">
        <div class="container">
            <h2 class="awards__title"> Награды и сертификаты компании</h2>
            <div class="awards__items d-lg-flex flex-wrap justify-content-around">
                <div class="awards__item">
                    <!-- рекомендуемый размер для превью картинки-185пикс на 250 пикс -->
                    <div class="awards__item__inner">
                        <a href="{{asset('img/content/sert1.jpg')}}" data-fancybox="images">
                            <img src="{{asset('img/content/sert1-mini.jpg')}}" alt="pic" />
                        </a>
                    </div>
                </div>
                <div class="awards__item">
                    <div class="awards__item__inner">
                        <a href="{{asset('img/content/sert2.jpg')}}" data-fancybox="images">
                            <img src="{{asset('img/content/sert2-mimi.jpg')}}" alt="pic" />
                        </a>
                    </div>
                </div>
                <div class="awards__item">
                    <div class="awards__item__inner">
                        <a href="{{asset('img/content/sert1.jpg')}}" data-fancybox="images">
                            <img src="{{asset('img/content/sert1-mini.jpg')}}" alt="pic"/>
                        </a>
                    </div>
                </div>
                <div class="awards__item">
                    <div class="awards__item__inner">
                        <a href="{{asset('img/content/sert2.jpg')}}" data-fancybox="images">
                            <img src="{{asset('img/content/sert2-mimi.jpg')}}" alt="pic" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="green">
        <div class="container">
            <h2 class="green__title">Политика go greeen</h2>
            <h3 class="green__mess">Каждые 10 000 промытых метров трубопровода ГК «РУСИЧ»- это 1 посаженное дерево. А если Вы промываете сразу 1000 м.п.,
                мы сажаем именное дерево в Вашу честь</h3>
            <div class="green__items d-lg-flex  justify-content-around">
                <div class="green__item">
                    <span class="green__num">32</span>
                    <span class="green__name">Тонны <br>отходов</span>
                    <p class="green__descr">ежемесячно мы транспортируем в строго отведенные места/хранилища или отправляем на переработку</p>
                </div>
                <div class="green__item">
                    <span class="green__num">17</span>
                    <span class="green__name">деревьев</span>
                    <p class="green__descr">Мы посадили за 6 месяцев политики GO GREEN в ГК «РУСИЧ». В честь наших клиентов или просто так.</p>
                </div>
                <div class="green__item">
                    <span class="green__num">123</span>
                    <span class="green__name">энергосберегающих лапочек</span>
                    <p class="green__descr">в нашем офисе помогают нам формировать культуру бережного энергопотребления</p>
                </div>
            </div>
        </div>
    </div>

@endsection
