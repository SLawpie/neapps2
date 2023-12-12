<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-white dark:bg-slate-700 font-semibold text-xl text-slate-800 dark:text-gray-100 leading-tight">
            <div class="flex">
                <a href="{{ route('medical-reports.index') }}">
                    {{ __('medical-reports.name') }}
                </a>
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 order-b border-gray-200">
                    Wykaz przeprowadzonych badań dla konkretnego lekarza.
                </div>
            </div>
        </div>
    </div>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">

                @foreach ($sheetsNames as $i => $sheetName)
                    <div class="" onclick="pleaseWait({{ $i }})">
                        @php
                            $values = [$i, $path, $file, $sheetName];
                            $string = implode(';', $values);          
                        @endphp
                        
                        <x-app-card active :href="route('medical-reports.read-exams-types', Crypt::encryptString($string))">
                            <x-slot name="image">
                                <x-icons.user-doctor class="fill-gray-200 dark:fill-gray-500"/>
                            </x-slot>
                            <div class="w-full flex justify-center text-sm sm:text-lg">
                                <div id="please-wait-text-{{ $i }}" class="">
                                    {{ $sheetName }}
                                </div>
                                <div id="please-wait-{{ $i }}" class="hidden">
                                    <x-icons.wait class="text-slate-800 dark:text-white"/>
                                </div>
                            </div>
                        </x-app-card>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-700 text-slate-400 dark:text-gray-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end py-2 px-6 text-sm order-b border-gray-200">
                    plik: {{ $file }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>