@props([
    'image'=>"",
    'active'=> false,
])

@if ($active)
    <div class="rounded-lg bg-white dark:bg-slate-700 h-32 sm:h-64 transition ease-in-out delay-150 hover:scale-105 duration-300">
        <a {{ $attributes }}>
            <div class="h-3/4 flex flex-col place-content-center border-b-2 border-blue-500/50 dark:border-fuchsia-500/50">
                <div class="flex justify-center h-3/4">
                    {{ $image }}
                </div>
            </div>
            <div class="h-1/4 flex flex-col place-content-center">
                <div class="flex justify-center sm:text-xl text-slate-800 dark:text-gray-100">
                    {{ $slot }}
                </div>
            </div>
        </a>
    </div>        
@else
    <div class="rounded-lg bg-white dark:bg-slate-700 h-32 sm:h-64 opacity-50">
    </div> 
@endif