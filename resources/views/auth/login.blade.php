<x-guest-layout>    
    <x-auth-card>
        <x-slot:logo>
            <div class="flex flex-col items-center">
                <a href="/">
                    <x-application-logo 
                        class="w-32 h-32 fill-current text-light-text dark:text-dark-text transition ease-in-out delay-150 hover:scale-110 duration-300 mb-4" 
                    />
                </a>
            
                @if (($errors->any()) || ((session('status'))))
                <div id="" class="flex justify-center w-full">
                    <div class="flex w-full pb-6">
                        <x-flash-box type="alert">
                            @if (session('status'))
                                <p class="font-bold">{{ session('status') }}</p>
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
            </div>
        </x-slot>

        <!-- Session Status -->
        {{-- <x-auth-session-status 
            class="mb-4" 
            :status="session('status')" 
        /> --}}

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors 
            class="mb-4" 
            :errors="$errors" 
        /> --}}

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
                    class="block mt-1 w-full bg-light-bg-secondary" 
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

                <x-input id="password" class="block mt-1 w-full first-line bg-light-bg-secondary"
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
                            class="before:content[''] peer relative h-5 w-5 bg-light-bg-secondary dark:bg-dark-bg-primary cursor-pointer appearance-none rounded-md border border-light-bg-primary dark:border-dark-bg-primary transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-7 before:w-7 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-lg before:bg-light-accent dark:before:bg-dark-accent before:opacity-0 before:transition-opacity dark:checked:border-dark-accent checked:bg-light-accent dark:checked:bg-dark-accent checked:before:bg-light-accent dark:checked:before:bg-dark-accent hover:before:opacity-30 focus:outline-none focus-visible:ring focus-visible:ring-light-accent dark:focus-visible:ring-dark-accent"
                            id="remember_me"/>
                        <div 
                            class="absolute text-light-bg-primary transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
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
                        class="pl-2 font-medium text-sm text-light-text-primary dark:text-dark-text-primary cursor-pointer select-none"
                        for="remember_me">
                        {{ __('auth.remember') }} 
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" 
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-button class="ml-3">
                    {{ __('auth.login.button') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
