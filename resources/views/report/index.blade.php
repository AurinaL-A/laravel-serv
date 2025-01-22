<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
      
                <div class="card">
                    @foreach ($reports as $report)
                    <div class="cards">
                        <div class="cards_flex">
                        <p class="font-semibold text-2xl">{{ $report->service->title }}</p>
                            <p class="font-bold text-slate-800">{{ $report->address }}</p>
                            <p class="font-bold text-slate-800">{{ $report->date }}</p>
                            <p class="font-bold text-slate-800">{{ $report->time }}</p>
                            <p class="font-bold text-slate-800">{{ $report->payment }}</p>
                            <p class="font-bold text-slate-800">{{ $report->user->name }}</p>
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