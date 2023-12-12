@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600 dark:text-red-500">
            {{ __('validation.woops') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-red-600 dark:text-red-500">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
