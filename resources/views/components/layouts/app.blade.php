<x-layouts.main>

    <x-ui.app.sidebar />

    <div class="flex flex-col min-h-screen justify-stretch md:pl-[280px] pl-5 pr-5">
        <!-- Page Heading -->
        @if (isset($header))
            <header x-data="{ mobileMenu: false }" class="bg-transparent">
                <div class="flex items-center mx-auto h-14">
                    <div @click="window.dispatchEvent(new CustomEvent('open-sidebar'))" class="flex items-center group justify-center mr-1.5 rounded cursor-pointer w-7 h-7 hover:bg-slate-200 dark:hover:bg-zinc-700 dark:text-white md:hidden">
                        <button class="block h-full">
                            <div  class="flex flex-col items-start justify-between w-4 h-3 transition-all duration-300 linear">
                                <div class="h-[2px] flex-shrink-0 rounded-full transition-all linear duration-200 bg-zinc-500 group-hover:bg-zinc-700 dark:bg-zinc-300 dark:group-hover:bg-zinc-100 w-full group-hover:w-2/3 -translate-x-px"></div>
                                <div class="h-[2px] flex-shrink-0 rounded-full transition-all linear duration-200 bg-zinc-500 group-hover:bg-zinc-700 dark:bg-zinc-300 dark:group-hover:bg-zinc-100 opacity-100 w-1/2 group-hover:w-full -translate-x-px"></div>
                                <div class="h-[2px] flex-shrink-0 rounded-full transition-all linear duration-200 bg-zinc-500 group-hover:bg-zinc-700 dark:bg-zinc-300 dark:group-hover:bg-zinc-100 group-hover:w-1/2 w-2/3 -translate-x-px"></div>
                            </div>
                        </button>
                    </div>
                    {{ $header }}
                </div>
            </header>
        @endif
        
        {{ $slot }}
    </div>

</x-layouts.main>