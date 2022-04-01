<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn.css') }}">
    <!-- Script -->
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>

    <div class="header slid1" id="header">
        <div class="header-conteiner">
            <div class="logo"><img src="img/logo.png" alt="10"></div>
            <div class="menu-conteiner">
                <ul class="menu">
                    <li class="menu-punkt"><a class="mp-main" href="catalog.html">Купить авто</a></li>
                    <li class="menu-punkt"><a class="mp-main" href="#">Сервис</a></li>
                    <li class="menu-punkt"><a class="mp-main" href="#">Продать авто</a></li>
                    <li class="menu-punkt"><a class="mp-main" href="#">Контакты</a></li>
                    <li class="menu-punkt"><a class="mp-main" href="#">Услуги</a></li>
                </ul>
                <ul class="reg">
                    @if (Route::has('login'))
                    @auth
                    <li class="menu-punkt"><a href="{{ url('/dashboard') }}" <a class="mp-main">Личный кабинет</a></li>
                    @else
                    <li class="menu-punkt"> <a href="{{ route('login') }}" <a class="mp-main">Войти</a></li>

                    @if (Route::has('register'))
                    <li class="menu-punkt"> <a href="{{ route('register') }}" <a class="mp-main">Регистрация</a></li>

                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
        <div class="header-conteiner-tittle">
            <div class="header-tittle">
                Автомобили с пробегом по отличным ценам
            </div>
            <div class="header-text">
                Автомобили с пробегом по отличным ценам
                Автомобили с пробегом по отличным ценам
                Автомобили с пробегом по отличным ценам
            </div>
        </div>
        <div class="slider-conteiner">
            <div class="switch">
                <!-- <input name="switch" id="one" type="radio" checked />
                <label for="one" class="switch__label">One</label>
                <input name="switch" id="two" type="radio" />
                <label for="two" class="switch__label">Two</label>
                <input name="switch" id="three" type="radio" />
                <label for="three" class="switch__label">Three</label>
                <div class="switch__indicator" /> -->
                <input type="radio" name="elem" class="radiobtn" id="rad1" value="1" checked>
                <input type="radio" name="elem" class="radiobtn" id="rad2" value="2">
                <input type="radio" name="elem" class="radiobtn" id="rad3" value="3">
                <input type="radio" name="elem" class="radiobtn" id="rad4" value="4">
            </div>
        </div>

    </div>
    </div>
    </div>
    <div class="main">
        <div class="main-conteiner">
            <div class="uslg">
                <div class="uslg-conteiner">
                    <div class="uslg-title">Наш салон автомобилей предлагает следующие услуги</div>
                    <div class="uslg-box">
                        <div class="uslg-boxs">Купить автомобиль с пробегом</div>
                        <div class="uslg-boxs">Продать ваш автомобиль</div>
                        <div class="uslg-boxs">Оформить полис ОСАГО/КАСКО</div>
                        <div class="uslg-boxs">Провести ТО</div>
                    </div>
                </div>
            </div>
            <div class="catalog_avto">
                <div class="catalog_avto-conteiner">
                    <div class="uslg-title">
                        Автомобили с пробегом
                    </div>
                    <div class="catalog-box">
                        @foreach($car as $el)
                        <div class="catalog-item">
                            <div class="item-image"><img src="img/bg-header.png" alt="1"></div>
                            <div class="item-t">Марка: {{$el->brand}}</div>
                            <div class="item-t">Модель: {{$el->model}}</div>
                            <div class="item-t">Пробег: {{$el->probeg}}</div>
                            <div class="item-descript">{{$el->opis}}</div>
                            <div class="item-price">{{$el->price}}₽</div>
                            <div class="btn-box"><button class="item-btn">Посмотреть</button></div>
                        </div>
                        @endforeach
                    </div>
                    <div class="catalog-link">
                        <a href="#">Все автомобили</a>
                    </div>
                </div>
            </div>
            <div class="catalog_servis">
                <div class="catalog_servis-conteiner">
                    <div class="uslg-title">Сервис</div>
                    <div class="uslg-box">
                        <div class="uslg-boxs">Купить автомобиль с пробегом</div>
                        <div class="uslg-boxs">Продать ваш автомобиль</div>
                        <div class="uslg-boxs">Оформить полис ОСАГО/КАСКО</div>
                        <div class="uslg-boxs">Провести ТО</div>
                    </div>
                    <div class="catalog-link">
                        <a href="#">Все услуги</a>
                    </div>
                </div>
            </div>
            <div class="form_manager">
                <div class="form_manager-conteiner">
                    <div class="uslg-title">Выкуп вашего авто</div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-conteiner">
            zerO 2022*
        </div>
    </div>
</body>

</html>