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
                    <li class="menu-punkt"><a class="mp-catalog" href="{{ route('catalog') }}">Купить авто</a></li>
                    <li class="menu-punkt"><a class="mp-catalog" href="{{ url('/#vikup') }}">Продать авто</a></li>
                    <!-- <li class="menu-punkt"><a class="mp-catalog" href="#">Контакты</a></li> -->
                    <!-- <li class="menu-punkt"><a class="mp-catalog" href="#">Услуги</a></li> -->
                </ul>
            </div>
        </div>
        <div class="main servis">
            <div class="catalog-title">Сервис</div>
            <div class="form-cont" style="width: 100%; height:100%;">

                <form action="{{ route('uslg-submit') }}" method="post" class="form-post">
                    @csrf
                    <input type="text" name="fio_client" id="fio_client" class="inp-add inps" placeholder="Введите имя" required>
                    <select name="status_client" id="status_client" required class="inp-add sels">
                        <option value="">Выберите услугу</option>
                        <option value="Оформить ОСАГО/КАСКО">Оформить ОСАГО/КАСКО</option>
                        <option value="Провести ТО">Провести ТО</option>
                        <option value="Замена масла">Замена масла</option>
                        <option value="Шиномонтаж">Шиномонтаж</option>
                    </select>
                    <input type="text" name="number_client" id="number_client" class="inp-add inps" placeholder="Введите номер" required>
                    <div class="btn-box"><button class="item-btn">Отправить</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-conteiner">
            zerO 2022*
        </div>
    </div>
    <script src="{{ asset('js/jq.js') }}" defer></script>
    <script src="{{ asset('js/jquery.maskedinput.js') }}" defer></script>
    <script src="{{ asset('js/mask.js') }}" defer></script>
    <script src="{{ asset('js/testajax.js') }}" defer></script>
</body>

</html>