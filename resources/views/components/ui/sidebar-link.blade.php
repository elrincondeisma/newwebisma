@props([
    'href' => '/',
    'icon' => 'phosphor-house-duotone',
    'active' => false,
    'hideUntilGroupHover' => true,
])

@php
    $isActive = filter_var($active, FILTER_VALIDATE_BOOLEAN);
@endphp

<a {{ $attributes }} href="{{ $href }}" class="@if($isActive){{ 'text-zinc-900 bg-zinc-200 font-medium dark:border-white dark:bg-zinc-700/60 dark:text-zinc-200' }}@endif transition-colors px-2.5 py-2 flex rounded-md w-full h-auto text-sm hover:bg-zinc-200 dark:hover:bg-zinc-700/60 justify-start items-center hover:text-zinc-900 dark:hover:text-zinc-100 space-x-2 overflow-hidden group-hover:autoflow-auto items">
    <x-dynamic-component :component="$icon" class="flex-shrink-0 h-5" />
    <span class="flex-shrink-0 ease-out duration-50">{{ $slot }}</span>
</a>
