<x-app-layout>
    <x-slot:header>
        <h2 class="bg-light-bg-secondary dark:bg-dark-bg-secondary font-semibold text-xl text-light-text-primary dark:text-dark-text-primary leading-tight">
            {{ __('dashboard.welcome') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                <x-app-card active :href="route('medical-reports.index')">
                    <x-slot:image>
                        <img src="{{ asset('images/raporty.icon.png') }}" alt="Medical Reports Icon">
                    </x-slot>
                    {{ __('medical-reports.name') }}
                </x-app-card>
                <div class="">
                    <x-app-card active>
                        <x-slot name="image">
                            <img src="{{ asset('images/book.png') }}" alt="Book Icon">
                        </x-slot>
                        Biblioteczka
                    </x-app-card>
                </div>
                <div class="invisible sm:visible">
                    <x-app-card />
                </div>
                <div class="invisible lg:visible">
                    <x-app-card />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
