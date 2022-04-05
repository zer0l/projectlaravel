<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавления автомобиля') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="column-form">
                        @foreach($car as $el)
                        <div class="catalog-item" style="margin: 50px;">
                            <div class="item-image"><img src="img/bg-header.png" alt="1"></div>
                            <div class="item-t">Марка: {{$el->cars->addbrand}}</div>
                            <div class="item-t">Модель: {{$el->model}}</div>
                            <div class="item-t">Пробег: {{$el->probeg}}</div>
                            <div class="item-descript">{{$el->opis}}</div>
                            <div class="item-price">{{$el->price}}₽</div>
                            <div class="btn-box"><a href="{{ route('car-delete', $el->id) }}"><button class="item-btn">Удалить</button></a></div>
                        </div>
                        @endforeach

                    </div>
                    {{$car ->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>