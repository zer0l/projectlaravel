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
                    <div class="form-cont">
                        <form action="{{ route('car-submit') }}" method="post" class="form-post">
                            @csrf
                            <label for="">
                                Выберете марку
                            </label>
                            <select name="brand" id="brand" class="inp-add" required>
                                <option value="" >Выберете марку</option>
                                @foreach($brand as $brands)
                                <option value="{{$brands->id}}" >{{$brands->addbrand}}</option>
                                @endforeach
                            </select>
                            <label for="">
                                Введите модель
                            </label>
                            <select name="model" id="model" class="inp-add" required>
                                <option value="">Выберете марку</option>
                            </select>
                            <label for="">
                                Год выпуска
                            </label>
                            <input type="month" name="year" id="year" class="inp-add" required pattern="[1-2]{1}[0-9]{3}">
                            <label for="">
                                Пробег
                            </label>
                            <input type="text" name="probeg" id="probeg" class="inp-add" placeholder="км." required>
                            <label for="">
                                Владельцев по ПТС
                            </label>
                            <input type="text" name="xoz" id="xoz" class="inp-add" pattern="[0-9]{,1}" required>
                            <label for="opis">
                                Краткое описание
                            </label>
                            <textarea name="opis" id="opis" cols="30" rows="10" required></textarea>

                            <label for="">
                                Цена
                            </label>
                            <input type="text" name="price" id="price" class="inp-add" value="" pattern="[0-9]{4,}" placeholder="₽." required>
                            <div class="flex items-center justify-center mt-4">
                                <x-button class="ml-3">
                                    {{ __('Добавить') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>