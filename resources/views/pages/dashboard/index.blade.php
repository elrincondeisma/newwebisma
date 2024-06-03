<?php

use function Laravel\Folio\{middleware, name};

name('dashboard');
middleware(['auth', 'verified']);

?>

<x-layouts.app>
    <x-slot name="header">
        <h2 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('LaraGPT') }}
        </h2>
    </x-slot>

    @volt('dashboard')
        <div class="flex flex-col flex-1 items-stretch h-100">

        </div>
    @endvolt
</x-layouts.app>
