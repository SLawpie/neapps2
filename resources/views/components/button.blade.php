@props(['type' => 'submit'])

<button {{ $attributes->merge(['type' => $type, 'class' => 'inline-flex items-center px-4 py-2 bg-blue-500 dark:bg-fuchsia-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-opacity-80 dark:hover:bg-opacity-80 active:bg-blue-500 dark:active:bg-fuchsia-500 focus:outline-none focus:border-blue-500 dark:focus:border-fuchsia-500 focus:ring ring-blue-500 dark:ring-fuchsia-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>