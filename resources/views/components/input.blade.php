@props(['disabled' => false, 'type' => 'text', 'placeholder' => ''])

@php
    $classes = ($disabled ?? false)
                ? 'bg-light-bg-secondary dark:dark-bg-primary text-light-text-primary dark:text-dark-text-primary'
                : 'rounded shadow-sm bg-light-bg-primary dark:bg-dark-bg-primary text-light-text-primary dark:text-dark-text-primary focus:outline-none focus:ring-4 ring-offset-2 ring-offset-light-bg-primary dark:ring-offset-dark-bg-primary focus:ring-light-accent dark:focus:ring-dark-accent';

    switch($type) {
        case 'file':
            // $additionalClasses=' text-md file:px-2 file:py-2 file:font-semibold file:text-xs file:text-light-text-primary dark:file:text-dark-text-primary file:uppercase file:tracking-widest file:bg-gray-200 file:border file:border-transparent file:rounded-md file:font-semibold cursor-pointer';
            $additionalClasses=' text-md cursor-pointer';
            break;
        case 'text':
            $additionalClasses=' pl-2';
            break;
        case 'password':
            $additionalClasses=' pl-2';
            break;
        default:
            $additionalClasses='';
            break;
    }

    $classes .= $additionalClasses
@endphp

{{-- <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded shadow-sm bg-gray-100 dark:bg-slate-800 text-slate-800 dark:text-gray-100 pl-2 focus:outline-none focus:ring-4 ring-offset-2 ring-offset-gray-100 dark:ring-offset-slate-800 focus:ring-blue-500 dark:focus:ring-fuchsia-500']) !!}> --}}
<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => $type, 'class' => $classes, 'placeholder' => $placeholder]) }}>