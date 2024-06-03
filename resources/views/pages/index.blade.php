<?php

use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, rules};

name('home');
middleware(['redirect-to-dashboard']);

?>

<x-layouts.marketing>

    @volt('home')
        <div class="relative flex flex-col items-center justify-center w-full h-auto overflow-hidden" x-cloak>


            <div class="flex items-center w-full max-w-6xl px-8 pt-12 pb-20 mx-auto">
                <div class="container relative max-w-4xl mx-auto mt-20 text-center sm:mt-24 lg:mt-32">
                    <div style="background-image:linear-gradient(160deg,#e66735,#e335e2 50%,#73f7f8, #a729ed)" class="inline-block w-auto p-0.5 shadow rounded-full animate-gradient">
                        <p class="w-auto h-full px-3 bg-slate-50 dark:bg-neutral-900 dark:text-white py-1.5 font-medium text-sm tracking-widest uppercase  rounded-full text-slate-800/90 group-hover:text-white/100">Bienvenidos Coders</p>
                    </div>
                    <h1 class="mt-5 text-5xl font-light leading-tight tracking-tight text-center dark:text-white text-slate-800 sm:text-5xl md:text-8xl text-transform: uppercase">El Rincón de Isma</h1>
                    <p class="w-full max-w-2xl mx-auto mt-8 text-lg dark:text-white/60 text-slate-500">La mayor comunidad de desarrolladores hispanos de Laravel</p>
                    <div class="flex items-center justify-center w-full max-w-sm px-5 mx-auto mt-8 space-x-5">
                        <x-ui.button type="primary" tag="a" href="https://www.youtube.com/@elrincondeisma?sub_confirmation=1" target="_blank">Accede a la comunidad</x-ui.button>
                    </div>
                </div>
            </div>

        </div>
    @endvolt

</x-layouts.marketing>
