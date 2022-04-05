<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Клиенты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="client-box">
                        @foreach($clients as $el)
                        <div class="client">
                            <div class="t">
                                Имя клиента: {{$el->fio_client}}
                            </div>
                            <div class="t">
                                Номер клиента:{{$el->number_client}}
                            </div>
                            <div class="t">
                                Статус клиента: {{$el->status_client}}
                            </div>
                            <!-- <div class="t">
                                <button class="item-btn" id="btn-svyz">Связаться</button>
                            </div> -->
                            <div class="t">
                                <a href="{{ route('deleteClient', $el->id) }}">
                                    <button class="item-btn">Решена</button>
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