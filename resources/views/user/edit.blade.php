<x-app-layout>
    <x-slot:header>
        <div class="flex">
            <div class="h-6 -ms-1">
                <a href="{{ route('user.show', Crypt::encryptString(Auth::user()->id)) }}">
                    <x-icons.chevron-double-left class="pe-2"/>
                </a>
            </div>
            <h2 class="bg-white dark:bg-slate-700 font-semibold text-xl text-slate-800 dark:text-gray-100 leading-tight">
                Edycja informacji o profilu
            </h2>
        </div>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 shadow-sm sm:rounded-lg">
                <div class="sm:flex items-center px-4 py-6 sm:px-6 border-gray-200">
                    <div class="sm:flex-none w-full">
                        <div class="flex justify-between">
                            <div class="text-xl font-bold pb-4">
                                Informacje podstawowe
                            </div>
                            <div>
                                <a href="">
                                    <x-button>
                                        Zapisz
                                    </x-button>
                                </a>
                            </div>
                        </div>

                        <div class="flex justify-center w-full">
                            <div class="flex flex-row w-full lg:w-5/6 xl:w-3/4 ps-4 sm:ps-0">
                                <div class="h-28 w-28 lg:basis-1/4 xl:basis-1/3">
                                    <x-icons.user class="fill-gray-200 dark:fill-gray-500"/>
                                </div>
                                <div class="grow">
                                    <div class="grid grid-cols-1 gap-y-1 lg:gap-y-4 lg:grid-cols-2">
                                            <div class="font-bold">
                                                Nazwa
                                            </div>
                                            {{-- <div class="pb-1 sm:pb-4">
                                                {{ Auth::user()->username }}
                                            </div> --}}
                                            <x-input 
                                                id="username"
                                                type="text" 
                                                name="username" 
                                                class="h-10 placeholder:text-slate-800 dark:plsceholder:text-gray-100"
                                                placeholder="{{ Auth::user()->username }}"
                                            />
                                            <div class="font-bold">
                                                Imię
                                            </div>
                                            {{-- <div class="pb-1 lg:pb-4">
                                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                                            </div> --}}
                                            <x-input 
                                                id="firstname"
                                                type="text" 
                                                name="firstname" 
                                                class="h-10 placeholder:text-slate-800 dark:plsceholder:text-gray-100"
                                                placeholder="{{ Auth::user()->firstname }}"
                                            />
                                            <div class="font-bold">
                                                Nazwisko
                                            </div>
                                            {{-- <div class="pb-1 lg:pb-4">
                                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                                            </div> --}}
                                            <x-input 
                                                id="lastname"
                                                type="text" 
                                                name="lastname" 
                                                class="h-10 placeholder:text-slate-800 dark:plsceholder:text-gray-100"
                                                placeholder="{{ Auth::user()->lastname }}"
                                            />
                                            <div class="font-bold">
                                                Adres e-mail
                                                </div>
                                            {{-- <div class="pb-1">
                                                {{ Auth::user()->email }}
                                            </div> --}}
                                            <x-input 
                                                id="lastname"
                                                type="text" 
                                                name="lastname" 
                                                class="h-10 placeholder:text-slate-800 dark:plsceholder:text-gray-100"
                                                placeholder="{{ Auth::user()->email }}"
                                            />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> 

        </div>
    </div>

</x-app-layout>