<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo 
                    class="w-32 h-32 fill-current text-gray-500 dark:text-gray-200 transition ease-in-out delay-150 hover:scale-110 duration-300 mb-4" 
                />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status 
            class="mb-4" 
            :status="session('status')" 
        />

        <!-- Validation Errors -->
        <x-auth-validation-errors 
            class="mb-4" 
            :errors="$errors" 
        />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address changed to username-->
            <div>
                <x-label 
                    for="username" 
                    :value="__('auth.user')" 
                />

                <x-input 
                    id="username" 
                    class="block mt-1 w-full" 
                    type="text" 
                    name="username" 
                    :value="old('username')" 
                    required 
                    autofocus 
                />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label 
                    for="password" 
                    :value="__('auth.password.password')" 
                />

                <x-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    {{-- required autocomplete="current-password" --}}
                />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 pt-2">
                <div class="inline-flex items-center">
                    <label
                        class="relative flex items-center rounded-full cursor-pointer"
                        for="remember_me"
                        data-ripple-dark="true">
                        <input
                            type="checkbox"
                            class="before:content[''] peer relative h-5 w-5 bg-gray-100 dark:bg-slate-800 cursor-pointer appearance-none rounded-md border border-gray-100 dark:border-slate-800 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-7 before:w-7 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-lg before:bg-blue-500 dark:before:bg-fuchsia-500 before:opacity-0 before:transition-opacity dark:checked:border-fuchsia-500 checked:bg-blue-500 dark:checked:bg-fuchsia-500 checked:before:bg-blue-500 dark:checked:before:bg-fuchsia-500 hover:before:opacity-30 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 dark:focus-visible:ring-fuchsia-500"
                            id="remember_me"/>
                        <div 
                            class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-3.5 w-3.5"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="1">
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </div>
                    </label>
                    <label
                        class="pl-2 font-medium text-sm text-slate-800 dark:text-gray-100 cursor-pointer select-none"
                        for="remember_me">
                        {{ __('auth.remember') }} 
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" 
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('auth.login.button') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
