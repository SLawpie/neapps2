<div class="flex flex-col items-center justify-center h-screen">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md px-6 py-4 bg-gray-200 dark:bg-slate-700 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
