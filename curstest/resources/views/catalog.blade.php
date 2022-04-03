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

    <div class="header" id="header">
        <div class="header-conteiner">
            <div class="logo"><img src="img/logo.png" alt="10"></div>
            <div class="menu-conteiner">
                <ul class="menu">
                    <li class="menu-punkt"><a class="mp-catalog" href="{{ url('/') }}">Главная</a></li>
                    <li class="menu-punkt"><a class="mp-catalog" href="{{ route('servis') }}">Сервис</a></li>
                    <li class="menu-punkt"><a class="mp-catalog" href="#">Продать авто</a></li>
                    <!-- <li class="menu-punkt"><a class="mp-catalog" href="#">Контакты</a></li> -->
                    <!-- <li class="menu-punkt"><a class="mp-catalog" href="#">Услуги</a></li> -->
                </ul>
            </div>
        </div>
        <div class="main">
            @foreach($car as $el)
            <div class="catalog-item">
                <div class="item-image"><img src="img/bg-header.png" alt="1"></div>
                <div class="item-t">Марка: {{$el->brand_id}}</div>
                <div class="item-t">Модель: {{$el->model}}</div>
                <div class="item-t">Пробег: {{$el->probeg}}</div>
                <div class="item-descript">{{$el->opis}}</div>
                <div class="item-price">{{$el->price}}₽</div>
                <div class="btn-box"><button class="item-btn">Посмотреть</button></div>
            </div>
            @endforeach
        </div>
    <div class="footer">
        <div class="footer-conteiner">
            zerO 2022*
        </div>
    </div>
</body>

</html>