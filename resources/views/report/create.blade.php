<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold py-5">
            {{ __('Создание нового заявления')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form enctype="multipart/form-data" class="p-4 md:p-5 space-y-4" method="POST" action="{{route('report.store')}}">
                @csrf
                <div class="flex flex-col w-50">
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="address" :value="__('Адрес')" />
                        <x-text-input id="address" name="address" type="text" class="w-1/2 block mt-1 py-2  " :placeholder="__('Введите адрес')" required />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="contact" :value="__('Контакты')" />
                        <x-text-input id="contact" name="contact" type="text" class="w-1/2 block mt-1 py-2  " :placeholder="__('Введите ваши контакты')" required />
                        <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="date" :value="__('Дата')" />
                        <x-text-input id="date" name="date" type="date" class="w-1/2 block mt-1 py-2  " :placeholder="__('Введите нужную дату')" required />
                        <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="time" :value="__('Время')" />
                        <x-text-input id="time" name="time" type="time" class="w-1/2 block mt-1 py-3  " :placeholder="__('Введите адрес')" required />
                        <x-input-error :messages="$errors->get('time')" class="mt-2" />
                    </div>
                    <!-- address -->
                    <div class="py-2">
                        <x-input-label for="payment" :value="__('Оплата')" />
                        <select id="payment" class="w-1/2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="payment" required>
                            <option value='Наличный'>Наличный</option>
                            <option value='Безналичный'>Безналичный</option>
                            <option value='Частичный'>Частичный</option>
                        </select>
                        <x-input-error :messages="$errors->get('time')" class="mt-2" />
                    </div>

                    <div class="py-2">
                        <x-input-label for="service" :value="__('Вид услуги')" />
                        <select id="service" class="w-1/2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " name="service" required>
                            @foreach($services as $service)
                            <option value='{{$service->id}}'>{{$service->title}}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('service')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="path_img" :value="__('Время')" />
                        <input type='file' id="path_img" class="block mt-1" name="path_img" required />
                        <x-input-error :messages="$errors->get('path_img')" class="mt-2" />
                    </div>

                    <!-- Status -->

                </div>
                <button type="submit" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">{{ __('Создать заявление')}}</button>
            </form>

        </div>


    </div>
</x-app-layout>