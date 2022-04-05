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
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
</head>

<body>

    <div class="header-catal" id="header">
        <div class="header-conteiner">
            <div class="logo"><img src="img/logo.png" alt="10"></div>
            <div class="menu-conteiner">
                <ul class="menu">
                    <li class="menu-punkt"><a class="mp-catalog" href="{{ url('/') }}">Главная</a></li>
                    <li class="menu-punkt"><a class="mp-catalog" href="{{ route('servis') }}">Сервис</a></li>
                    <li class="menu-punkt"><a class="mp-catalog" href="{{ url('/#vikup') }}">Продать авто</a></li>
                    <!-- <li class="menu-punkt"><a class="mp-catalog" href="#">Контакты</a></li> -->
                    <!-- <li class="menu-punkt"><a class="mp-catalog" href="#">Услуги</a></li> -->
                </ul>
            </div>
        </div>
    </div>
    <div class="main-catl">
        <div class="catalog-title">Каталог автомобилей</div>
        <div class="catalog-conts">
            @foreach($car as $el)
            <div class="catl-item">
                <div class="item-image"><img src="img/bg-header.png" alt="1"></div>
                <div class="item-t" style="margin-bottom: 7px;">Марка: {{$el->cars->addbrand}}</div>
                <div class="item-t" style="margin-bottom: 7px;">Модель: {{$el->model}}</div>
                <div class="item-t" style="margin-bottom: 7px;">Пробег: {{$el->probeg}}</div>
                <div class="item-t" style="margin-bottom: 7px;">Год выпуска: {{$el->year}}</div>
                <div class="item-t" style="margin-bottom: 7px;">Хозяев: {{$el->xoz}}</div>
                <div class="item-descript" style="margin-bottom: 10px;">{{$el->opis}}</div>
                <div class="item-price" style="margin-bottom: 10px;">{{$el->price}}₽</div>
                <div class="btn-box"><button class="item-btn" id="catalog-item-btn" style="margin-bottom: 20px;">Посмотреть</button></div>
                <div style="display:flex;justify-content:center;">
                    <form action="{{ route('zayvka-submit') }}" method="post" class="form-post" style="width:50%;">
                        @csrf
                        <input type="text" name="fio_client" id="fio_client" class="inp-add inps shows" placeholder="Введите имя" required>
                        <input type="text" name="number_client" id="number_client" class="inp-add inps shows" placeholder="Введите номер" required>
                        <input type="hidden" name="status_client" id="status_client" value="Продажа авто - id: {{$el->id}} {{$el->cars->addbrand}} {{$el->model}}">
                        <div class="btn-box shows"><button class="item-btn" style="margin-bottom: 20px;">Отправить</button></div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="catalog-links">{{$car->links()}}</div>
    </div>
    <div class="footer">
        <div class="footer-conteiner">
            zerO 2022*
        </div>
    </div>
    <script src="{{ asset('js/jq.js') }}" defer></script>
    <script src="{{ asset('js/catalogItem-show.js') }}" defer></script>
    <script src="{{ asset('js/jquery.maskedinput.js') }}" defer></script>
    <script src="{{ asset('js/mask.js') }}" defer></script>
</body>

</html>