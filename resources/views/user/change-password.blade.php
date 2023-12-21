<x-app-layout>
    <x-slot:header>
        <div class="flex">
            <div class="h-6 -ms-1  text-light-text-primary dark:text-dark-text-primary">
                <a href="{{ route('user.edit', Crypt::encryptString(Auth::user()->id)) }}">
                    <x-icons.chevron-double-left class="pe-2"/>
                </a>
            </div>
            <h2 class="bg-light-bg-secondary dark:bg-dark-bg-secondary font-semibold text-xl text-light-text-primary dark:text-dark-text-primary leading-tight">
                Zmiana hasła
            </h2>
        </div>
    </x-slot>

    <div class="pt-8">
        <form method="POST" action="{{ route('user.change-password', Crypt::encryptString(Auth::user()->id)) }}">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                @if (($errors->any()) || ((session('messagetype'))))
                <div id="" class="flex justify-center w-full">
                    <div class="flex w-full sm:w-3/4 pb-6">
                        <x-flash-box type="alert">
                            @if (session('messagetype'))
                                <p class="font-bold">{{ session('message') }}</p>
                            @endif
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="font-bold">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </x-flash-box>
                    </div> 
                </div>
                @endif

                <div class="bg-light-bg-secondary dark:bg-dark-bg-secondary text-light-text-primary dark:text-dark-text-primary shadow-sm sm:rounded-lg">
                    <div class="sm:flex items-center px-4 py-6 sm:px-6 border-dark-bg">
                        <div class="sm:flex-none w-full">
                            <div class="flex justify-between">
                                <div class="text-xl font-bold pb-4">
                                    Zmiana hasła
                                </div>
                            </div>

                            <div class="flex justify-center w-full">
                                <div class="flex flex-row w-full lg:w-3/4 xl:w-1/2 ps-4 sm:ps-0">
                                    <div class="w-full grid grid-cols-1 gap-y-1 lg:gap-y-4 lg:grid-cols-2">

                                        <div class="font-bold">
                                            Obecne hasło
                                        </div>
                                        <x-input 
                                            required 
                                            autofocus
                                            id="password"
                                            type="password" 
                                            name="password" 
                                            class="h-10 placeholder:text-light-text-primary/30 dark:placeholder:text-dark-text-primary/30"
                                            placeholder="obecne hasło"
                                        />

                                        <div>
                                            <p class="font-bold">Nowe hasło</p>
                                            <p class="text-xs me-2">
                                                Postaraj się by hasło miało od 6 do 30 znaków. Składało się z liter różnej wielkości oraz cyfr.
                                            </p>
                                        </div>
                                        <x-input 
                                            required 
                                            id="newpassword"
                                            type="password" 
                                            name="newpassword" 
                                            class="h-10 placeholder:text-light-text-primary/30 dark:placeholder:text-dark-text-primary/30"
                                            placeholder="nowe hasło"
                                        />

                                        <div class="font-bold">
                                            Potwierdź nowe hasło
                                        </div>
                                        <x-input
                                            required 
                                            id="confirm-newpassword"
                                            type="password" 
                                            name="confirm-newpassword" 
                                            class="h-10 placeholder:text-light-text-primary/30 dark:placeholder:text-dark-text-primary/30"
                                            placeholder="potwierdź nowe hasło"
                                        />

                                        <div class="font-bold"></div>
                                        <div class="flex justify-center mt-2">
                                            <x-button class="w-full flex justify-center">
                                                Zmień hasło
                                            </x-button>
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