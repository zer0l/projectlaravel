<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="font-bold text-xl">
                        <h1>Здраствуйте, {{ Auth::user()->name }}!</h1>
                    </div>
                    <div class="mt-8">
                        <div class="font-semibold text-m">
                            <h1>Ваши заявки</h1>
                        </div>
                        @foreach($zayvka as $el)
                        <div class="mt-4 border-y-2">
                            <div class="m-4">Временная метка: {{$el->created_at}}</div>
                            <div class="m-4">Название заявки: {{$el->nazvan}}</div>
                            <div class="m-4">Описания заявки: {{$el->opis}}</div>
                            <div class="m-4">Категория заявки: {{$el->categ}}</div>
                            <div class="m-4">Статус заявки: {{$el->status}}</div>
                            <div class="m-4 w-96 h-auto"><img src="{{asset('/storage/'.$el->photo)}}" alt=""></div>
                            <div class="flex items-center justify-start">
                                <a href="{{ route('zayvka-delete',$el->id) }}" class="m-4 w-3/5 h-auto">
                                    <x-button class="flex justify-center">
                                        {{ __('Удалить заявку') }}
                                    </x-button>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>