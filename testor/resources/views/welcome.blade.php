<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    @if (Route::has('login'))
    <div class="header">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Личный кабинет</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Войти</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a>
        @endif
        @endauth
    </div>
    @endif
    <div class="flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0" style="flex-direction: column;">
        <div class="first">
            <h1>Сделаем лучше вместе!</h1>
            <div class="subtitle">
                Сайт по приему заявок на устранение проблем в городе: ямочный ремонт дорог, ремонт детских площадок, зданий, сооружений и т.д
            </div>
        </div>
        <div class="">
            <div class="grid" style="grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 2.5rem;">
                @foreach($zayvka as $el)
                <div class=" m-4 ">
                    <div class=" m-4">Временная метка: {{$el->created_at}}</div>
                    <div class="m-4">Название заявки: {{$el->nazvan}}</div>
                    <div class="m-4">Категория заявки: {{$el->categ}}</div>
                    <div class="m-4 "><img style="height: 300px; width:500px;" src="{{asset('/storage/'.$el->photo)}}" alt=""></div>
                </div>
                @endforeach
            </div>
            <div class="mt-4">{{$zayvka->links()}}</div>
        </div>
    </div>

</body>

</html>