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
                                Введите марку
                            </label>
                            <input type="text" name="brand" id="brand" class="inp-add">
                            <label for="">
                                Введите модель
                            </label>
                            <input type="text" name="model" id="model" class="inp-add">
                            <label for="">
                                Год выпуска
                            </label>
                            <input type="text" name="year" id="year" class="inp-add">
                            <label for="">
                                Пробег
                            </label>
                            <input type="text" name="probeg" id="probeg" class="inp-add">
                            <label for="">
                                Владельцев по ПТС
                            </label>
                            <input type="text" name="xoz" id="xoz" class="inp-add">
                            <!-- <label for="">
                                Краткое описание
                            </label>
                            <textarea name="" id="" cols="30" rows="10"></textarea> -->
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