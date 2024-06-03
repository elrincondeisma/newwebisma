<div class="relative w-full select-none">
    <div
        x-data="{ {{ $id }}: {{ $open ?? false }} }"
        @click="{{ $id }}=!{{ $id }}"
        class="@if($active){{ 'text-zinc-900 bg-zinc-200 font-medium dark:bg-zinc-700/60 dark:text-zinc-200' }}@else{{ 'hover:theme-text' }}@endif ease-linear duration-50 transition-colors flex rounded-md w-full h-auto px-2.5 py-2 cursor-pointer text-sm hover:bg-zinc-200 dark:hover:bg-zinc-700/60 justify-start items-center hover:text-zinc-900 dark:hover:text-zinc-100 overflow-hidden group-hover:autoflow-auto items"
    >
        <div class="relative flex items-center w-full h-auto">
            <x-dynamic-component :component="$icon" class="flex-shrink-0 h-5 mr-2" />
            <span class="mr-0">{{ $text }}</span>
            <x-phosphor-caret-down class="w-4 h-4 ml-auto" />
        </div>

        <template x-teleport="#{{ $id }}">
            <div class="relative pt-1 pb-3 space-y-1" x-show="{{ $id }}" x-collapse x-cloak>
                {{ $slot }}
            </div>
        </template>
    </div>

    <div id="{{ $id }}" class="pl-2"></div>

</div>
