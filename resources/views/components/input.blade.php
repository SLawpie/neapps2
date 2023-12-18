@props(['disabled' => false, 'type' => 'text', 'placeholder' => ''])

@php
    $classes = ($disabled ?? false)
                ? ''
                : 'rounded shadow-sm bg-gray-100 dark:bg-slate-800 text-slate-800 dark:text-gray-100 focus:outline-none focus:ring-4 ring-offset-2 ring-offset-gray-100 dark:ring-offset-slate-800 focus:ring-blue-500 dark:focus:ring-fuchsia-500';

    switch($type) {
        case 'file':
            $additionalClasses=' text-md file:px-2 file:py-2 file:font-semibold file:text-xs file:text-slate-800 file:uppercase file:tracking-widest file:bg-gray-200 file:border file:border-transparent file:rounded-md file:font-semibold file:uppercase cursor-pointer';
            break;
        case 'text':
            $additionalClasses=' pl-2';
            break;
        default:
            $additionalClasses='';
            break;
    }

    $classes .= $additionalClasses
@endphp

{{-- <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded shadow-sm bg-gray-100 dark:bg-slate-800 text-slate-800 dark:text-gray-100 pl-2 focus:outline-none focus:ring-4 ring-offset-2 ring-offset-gray-100 dark:ring-offset-slate-800 focus:ring-blue-500 dark:focus:ring-fuchsia-500']) !!}> --}}
<input {{ $attributes->merge(['type' => $type, 'class' => $classes, 'placeholder' => $placeholder]) }}>