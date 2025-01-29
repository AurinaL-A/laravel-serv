<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Админ-панель') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      
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
                        </div>
                        <div class="cards_flex">
                            @if($report->status=="новая")
                            <form id="form-update-{{$report->id}}" action="{{route('report.update')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$report->id}}">
                                <select class="cursor-pointer hover:bg-slate-200" name="status" onchange="document.getElementById('form-update-{{$report->id}}').submit()">
                                    <option value='Новая'>Новая</option>
                                    <option value='Оказана'>Оказана</option>
                                    <option value='Отменена'>Отменена</option>
                                </select>
                            </form>
                            @else
                             <p id="statusColor" class='statusColor font-medium text-s bg-gray-300 pt-2 pb-2 pl-5 pr-5 rounded-xl	mt-3 w-min border-none'>{{$report->status}}</p>
                             @endif
                           
                        </div>
                        
                    </div>
                    @endforeach
                </div>
           
        </div>
    </div>
</x-app-layout>