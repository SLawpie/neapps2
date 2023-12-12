@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-blue-500 dark:border-fuchsia-800 text-base font-medium text-blue-500 dark:text-fuchsia-50 bg-blue-50 dark:bg-fuchsia-500 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-slate-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-50 dark:hover:bg-slate-800 hover:border-gray-400 dark:hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
