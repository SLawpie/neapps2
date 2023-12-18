<x-app-layout>
    <x-slot:header>
        <h2 class="bg-white dark:bg-slate-700 font-semibold text-xl text-slate-800 dark:text-gray-100 leading-tight">
            Zarządzanie kontem
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 shadow-sm sm:rounded-lg">
                <div class="sm:flex items-center px-4 py-6 sm:px-6 border-gray-200">
                    <div class="sm:flex-none w-full">
                        <div class="flex justify-between">
                            <div class="text-xl font-bold pb-4">
                                Informacje o profilu
                            </div>
                            <div>
                                <a href="{{ route('user.edit', Crypt::encryptString(Auth::user()->id)) }}">
                                    <x-button>
                                        Edytuj
                                    </x-button>
                                </a>
                            </div>
                        </div>

                        <div class="flex justify-center w-full">
                            <div class="flex flex-row w-full sm:w-3/4 ps-8 sm:ps-0">
                                <div class="h-28 w-28 sm:basis-1/3">
                                    <x-icons.user class="fill-gray-200 dark:fill-gray-500"/>
                                </div>
                                <div class="grow">
                                    <div class="grid grid-cols-1 sm:grid-cols-2">
                                            <div class="font-bold">
                                                Nazwa
                                            </div>
                                            <div class="pb-1 sm:pb-4">
                                                {{ Auth::user()->username }}
                                            </div>
                                            <div class="font-bold">
                                                Imię i Nazwisko
                                            </div>
                                            <div class="pb-1 sm:pb-4">
                                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                                            </div>
                                            <div class="font-bold">
                                                Adres e-mail
                                                </div>
                                            <div class="pb-1">
                                                {{ Auth::user()->email }}
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> 
            <div class="py-2"></div>
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 shadow-sm sm:rounded-lg">
                <div class="sm:flex items-center px-4 py-6 sm:px-6 border-gray-200">
                    <div class="sm:flex-none w-full">
                        <div class="text-xl font-bold pb-4">
                            Ustawienia regionalne
                        </div>
                        <div class="flex justify-center w-full">
                            <div class="flex w-full sm:w-3/4">
                                <div class="w-16 sm:grow">

                                </div>
                                <div class="basis-1/3 font-bold">
                                        Język
                                    </div>
                                <div class="grow sm:basis-1/3">
                                    polski (Polska)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 shadow-sm sm:rounded-lg">
                <div class="sm:flex items-center px-4 py-6 sm:px-6 border-gray-200">
                    <div class="sm:flex-none w-full">
                        <div class="text-xl font-bold pb-4">
                            Wygląd ogólny
                        </div>
                        <div class="flex justify-center w-full">
                            <div class="flex w-full xl:w-1/2">
                                <div class="py-2 grid grid-cols-1 md:grid-cols-3 gap-1 w-full">
                                    <div class="pt-2 grid gap-2 justify-items-center">
                                        <div class="h-28 cursor-pointer" onclick="switchTheme('light')">
                                            <svg id="lightTheme" class="w-full h-full fill-gray-100 stroke-gray-400 hover:stroke-[0.75px]"
                                                viewBox="0 0 24 16"
                                                stroke-width="0.25">
                                                <rect width="24" height="14" rx="1" ry="1" y="1"/>
                                            </svg>
                                        </div>
                                        <div class="flex justify-center">
                                            Jasny
                                        </div>
                                    </div>
                                    <div class="pt-2 grid gap-2 justify-items-center">
                                        <div class="h-28 cursor-pointer" onclick="switchTheme('dark')">
                                            <svg id="darkTheme" class="w-full h-full fill-slate-800 stroke-gray-400 hover:stroke-[0.75px]"
                                                viewBox="0 0 24 16"
                                                stroke-width="0.25">
                                                <rect width="24" height="14" rx="1" ry="1" y="1"/>
                                            </svg>
                                        </div>
                                        <div class="">
                                            Ciemny
                                        </div>
                                    </div>
                                    <div class="pt-2 grid gap-2 justify-items-center">
                                        <div class="h-28 cursor-pointer" onclick="switchTheme('system')">
                                            <svg id="systemTheme" class="w-full h-full stroke-gray-400 fill-slate-800 hover:stroke-[0.75px]"
                                                viewBox="0 0 24 16"
                                                stroke-width="0.25">
                                                <path
                                                    d="M0 2 L0 14 Q0 15 1 15 L23 15 Q24 15 24 14 L24 2 Q24 1 23 1 L1 1 Q0 1 0 2 Z"/>
                                                <path
                                                    fill="#f3f4f6"
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M0 2 Q0 1 1 1 L23 1 Q24 1 24 2 L24 14" />
                                            </svg>
                                        </div>
                                        <div class="">
                                            Motyw systemu
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 shadow-sm sm:rounded-lg">
                <div class="sm:flex items-center px-4 py-6 sm:px-6 border-gray-200">
                    <div class="sm:flex-none w-full">
                        <div class="text-xl font-bold pb-4">
                            Ostatnia aktywność
                        </div>
                        <div class="flex justify-center w-full">
                            <div class="table w-full lg:w-3/4 text-sm lg:text-base">
                                <div class="table-header-group font-bold uppercase">
                                    <div class="table-row">
                                      <div class="table-cell text-center">Lp.</div>
                                      <div class="table-cell text-center">Data</div>
                                      <div class="hidden sm:table-cell text-left">Przeglądarka</div>
                                      <div class="hidden sm:table-cell text-left">System</div>
                                      <div class="table-cell text-center">Ip</div>
                                      <div class="table-cell text-left">Kraj</div>
                                      <div class="table-cell text-center">Status</div>
                                    </div>
                                </div>
                                <div class="table-row-group">
                                    <div class="table-row">
                                      <div class="table-cell text-center">X</div>
                                      <div class="table-cell text-center">X.XX.XXXX</div>
                                      <div class="hidden sm:table-cell">Xxxxxx</div>
                                      <div class="hidden sm:table-cell">Xxxxxxx XX</div>
                                      <div class="table-cell text-center">XXX.XXX.XXX.XXX</div>
                                      <div class="table-cell">Xxxxxxxxx</div>
                                      <div class="table-cell font-bold text-center text-red-500 ">XXXX</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
        </div>
    </div>

    <x-slot:scripts>
        <script type="text/javascript">
            themeSelector();
        </script>
    </x-slot>

</x-app-layout>