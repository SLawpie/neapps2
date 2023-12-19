<x-app-layout>
    <x-slot:header>
        <div class="flex">
            <div class="h-6 -ms-1  text-slate-800 dark:text-gray-100">
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
    <form method="POST" action="{{ route('user.update', Crypt::encryptString(Auth::user()->id)) }}">
        @csrf
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($errors->any())
                <div id="" class="flex justify-center w-full">
                    <div class="flex w-full sm:w-3/4 pb-6">
                        <x-flash-box type="alert">
                            {{-- <p class="font-bold">{{ $errors[0] }}</p> --}}
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="font-bold">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </x-flash-box>
                    </div> 
                </div>
            @endif

            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 shadow-sm sm:rounded-lg">
                <div class="sm:flex items-center px-4 py-6 sm:px-6 border-gray-200">
                    <div class="sm:flex-none w-full">
                        <div class="flex justify-between mb-4">
                            <div class="text-xl font-bold pb-4">
                                Informacje podstawowe
                            </div>
                            <div>
                                <a href="{{ route('user.change-password-form', Crypt::encryptString(Auth::user()->id)) }}">
                                    <x-button type="button">
                                        Zmiana hasła
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
                                            <x-input 
                                                id="new-username"
                                                type="text" 
                                                name="new-username" 
                                                class="h-10 placeholder:text-slate-800/30 dark:placeholder:text-gray-100/30"
                                                placeholder="nazwa użytkownika"
                                                value="{{ Auth::user()->username }}"

                                            />
                                            <input id="username" name="username" value="{{ Auth::user()->username }}" type="hidden">

                                            <div class="font-bold">
                                                Imię
                                            </div>
                                            <x-input 
                                                id="new-firstname"
                                                type="text" 
                                                name="new-firstname" 
                                                class="h-10 placeholder:text-slate-800/30 dark:placeholder:text-gray-100/30"
                                                placeholder="podaj imię"
                                                value="{{ Auth::user()->firstname }}"
                                            />
                                            <input id="firstname" name="firstname" value="{{ Auth::user()->firstname }}" type="hidden">

                                            <div class="font-bold">
                                                Nazwisko
                                            </div>
                                            <x-input 
                                                id="new-lastname"
                                                type="text" 
                                                name="new-lastname" 
                                                class="h-10 placeholder:text-slate-800/30 dark:placeholder:text-gray-100/30"
                                                placeholder="podaj nazwisko"
                                                value="{{ Auth::user()->lastname }}"
                                            />
                                            <input id="lastname" name="lastname" value="{{ Auth::user()->lastname }}" type="hidden">

                                            <div class="font-bold">
                                                Adres e-mail
                                            </div>
                                            {{-- <x-input
                                                id="lastname"
                                                type="text" 
                                                name="lastname" 
                                                class="h-10 placeholder:text-slate-800 dark:placeholder:text-gray-100"
                                                placeholder="{{ Auth::user()->email }}"
                                            /> --}}
                                            <div class="">
                                                {{ Auth::user()->email }}
                                            </div>

                                            <div class="font-bold"></div>
                                            <div class="flex justify-center mt-2">
                                                <x-button class="w-full flex justify-center">
                                                    Zapisz
                                                </x-button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> 

        </div>
    </form>
    </div>

</x-app-layout>