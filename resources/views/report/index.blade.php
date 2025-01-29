<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ваши заявки') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="card">
                @foreach ($reports as $report)
                <div class="cards">
                    <div class="cards_flex">
                        <p class="font-semibold text-2xl pb-3">{{ $report->service->title }}</p>
                        <p class="font-bold text-slate-800"><strong>Адрес:</strong> {{ $report->address }}</p>
                        <p class="font-bold text-slate-800"><strong>Дата:</strong> {{ $report->date }}</p>
                        <p class="font-bold text-slate-800"><strong>Время:</strong> {{ $report->time }}</p>
                        <p class="font-bold text-slate-800"><strong>Выбор оплаты:</strong> {{ $report->payment }}</p>
                        <p class="font-bold text-slate-800"><strong>Пользователь:</strong> {{ $report->user->name }}</p>
                        @isset($report->path_img)
                            <img src="/images/{{$report->path_img}}" alt="" class='rounded-lg mt-2'>
                        @endisset
                    </div>
                    <div class="cards_flex">
                        <p class="font-bold">{{ $report->status }}</p>
                    </div>

                </div>
                @endforeach
            </div>
            <a class="btn_create" href="{{ route('report.create') }}">Создать заявление</a>

        </div>
    </div>
</x-app-layout>