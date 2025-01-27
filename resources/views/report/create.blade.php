<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold py-5">
            {{ __('Создание нового заявления')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form class="p-4 md:p-5 space-y-4" method="POST" action="{{route('report.store')}}">
                @csrf
                <div class="flex flex-col">
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" name="address" type="text" class="block mt-1 py-2  " :placeholder="__('Введите адрес')" required />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="contact" :value="__('Contact')" />
                        <x-text-input id="contact" name="contact" type="text" class="block mt-1 py-2  " :placeholder="__('Введите ваши контакты')" required />
                        <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="date" :value="__('Date')" />
                        <x-text-input id="date" name="date" type="date" class="block mt-1 py-2  " :placeholder="__('Введите нужную дату')" required />
                        <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="time" :value="__('Time')" />
                        <x-text-input id="time" name="time" type="time" class="block mt-1 py-3  " :placeholder="__('Введите адрес')" required />
                        <x-input-error :messages="$errors->get('time')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="payment" :value="__('Оплата')" />
                        <select id="payment" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="payment" required>
                            <option value='Наличный'>Наличный</option>
                            <option value='Безналичный'>Безналичный</option>
                            <option value='Частичный'>Частичный</option>
                        </select>
                        <x-input-error :messages="$errors->get('time')" class="mt-2" />
                    </div>

                    <div class="py-2">
                        <x-input-label for="service" :value="__('Вид услуги')" />
                        <select id="service" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " name="service" required>
                            @foreach($services as $service)
                            <option value='{{$service->id}}'>{{$service->title}}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('service')" class="mt-2" />
                    </div>

                    <!-- Status -->

                </div>
                <button type="submit" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">{{ __('Создать заявление')}}</button>
            </form>

        </div>


    </div>
</x-app-layout>