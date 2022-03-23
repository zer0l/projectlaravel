<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создание заявки') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-center">
                        <form action="{{ route('zayvka-submit') }}" method="post" enctype="multipart/form-data" class="w-2/3">
                            @csrf
                            <div class="mt-4">
                                <x-label for="nazvan" :value="__('Название')" />

                                <input id="nazvan" class="block mt-1 w-full border-0 border-b-2 border-black" type="text" name="nazvan" required>
                            </div>

                            <div class="mt-4">
                                <x-label for="opis" :value="__('Описание')" />

                                <input id="opis" class="block mt-1 w-full border-0 border-b-2 border-black" type="text" name="opis" required>
                            </div>

                            <div class="mt-4">
                                <x-label for="categ" :value="__('Категория')" />

                                <select id="categ" class="block mt-1 w-full border-0 border-b-2 border-black" type="text" name="categ" required>
                                    <option value="Ремонт дорог">Ремонт дорог</option>
                                    <option value="Уборка мусор">Уборка мусор</option>
                                    <option value="Покраска стен">Покраска стен</option>
                                </select>
                            </div>

                            <input id="status" type="text" name="status" value="Новая" hidden>

                            <div class="mt-4">
                                <x-label for="photo" :value="__('Фото')" />

                                <input id="photo" class="block mt-1 w-full" type="file" name="photo">
                            </div>

                            <div class="flex items-center justify-center mt-6">
                                <x-button class="ml-3 w-1/2 h-10 flex justify-center">
                                    {{ __('Создать заявку') }}
                                </x-button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>