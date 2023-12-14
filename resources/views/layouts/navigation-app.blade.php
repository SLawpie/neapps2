@php
    $version = implode('.', Config::get('app.version'));
@endphp

<nav x-data="{ open: false }" class="bg-white dark:bg-slate-700 border-b border-blue-500 dark:border-fuchsia-500 text-slate-800 dark:text-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-500 dark:text-gray-200 transition ease-in-out delay-150 hover:scale-110 duration-300" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('app.home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('medical-reports.index')">
                        {{ __('medical-reports.name') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <button id="dark-icon" class="hidden dark:visible h-6 text-slate-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" onclick="darkLight()">
                    <x-icons.moon class="pe-4" />
                </button>
                <button id="light-icon" class="h-7 text-xs text-slate-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" onclick="darkLight()">
                    <x-icons.sun class="pe-4" />
                </button>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-slate-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div class="h-7">
                                <x-icons.user-circle class=""/>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <div class="pt-4 pb-2 border-b border-gray-200 dark:border-gray-400">
                            <div class="flex justify-center font-medium text-base text-slate-800 dark:text-gray-100">
                                {{ Auth::user()->firstname }}
                            </div>
                            <div class="flex justify-center font-medium text-sm text-slate-500 dark:text-gray-400">
                                {{ Auth::user()->email }}
                            </div>
                            <div class="flex justify-end px-2 pt-4 text-xs text-gray-400 dark:text-gray-500">
                                {{ $version }}
                            </div>
                        </div>
                        <div class="pt-2">
                            <x-dropdown-link :href="route('user.index')">
                                {{ __('app.user.settings') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('auth.logout') }}
                                </x-dropdown-link>
                            </form>
                        </div>  
                        {{-- <div class="flex justify-end items-center p-2">
                            <x-toggle-dark-light nr="1" />
                        </div> --}}
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" 
                    class="inline-flex items-center justify-center p-2 rounded-md text-slate-800 dark:text-gray-100 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-slate-800 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                    onclick="hamClick()">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('app.home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('medical-reports.index')">
                {{ __('medical-reports.name') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-blue-300 dark:border-fuchsia-500">
            <div class="px-4 flex justify-between items-center">
                <div>
                    <div class="font-medium text-base text-slate-800 dark:text-gray-100">
                        {{ Auth::user()->firstname }}
                    </div>
                    <div class="font-medium text-sm text-slate-500 dark:text-gray-400">
                        {{ Auth::user()->email }}
                    </div>
                </div>
                <div>
                   <x-toggle-dark-light />
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('user.index')">
                    {{ __('app.user.settings') }}
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('auth.logout') }}
                    </x-responsive-nav-link>
                </form>
            </div>

            <div class="px-4 flex justify-end items-center">
                <div class="text-xs text-slate-500 dark:text-gray-400">
                    {{ $version }}
                </div>

            </div>
        </div>
    </div>
</nav>
