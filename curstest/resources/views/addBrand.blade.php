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
                        <form action="{{ route('brand-submit') }}" method="post" class="form-post">
                            @csrf
                            <label for="">
                                Введите марку
                            </label>
                            <input type="text" name="addbrand" id="addbrand" class="inp-add" required>

                            <x-button class="ml-3">
                                {{ __('Добавить') }}
                            </x-button>
                    </div>
                    </form>
                    <div class="form-cont">
                        <form action="{{ route('model-submit') }}" method="post" class="form-post">
                            @csrf
                            <label for="" style="margin-top:15px;">
                            Выберете марку
                            </label>
                            <select name="brands" id="brands" class="inp-add" required>
                                <option value="" selected = "selected">Выберете марку</option>
                                @foreach($brand as $el)
                                <option value="{{$el->id}}">{{$el->addbrand}}</option>
                                @endforeach
                            </select>
                            <label for="">
                                Введите модель
                            </label>
                            <input type="text" name="addmodel" id="addmodel" class="inp-add" required>

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