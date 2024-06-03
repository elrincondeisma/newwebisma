<div
    x-data="{
        darkMode: $persist(false).as('dark_mode'),
    }"
    x-init="
        if(document.documentElement.classList.contains('dark')){ darkMode=true; }
        $watch('darkMode', function(value){
            if(value){
                document.documentElement.classList.add('dark');
        } else {
                document.documentElement.classList.remove('dark');
            }
        })
    "
    @click="darkMode = !darkMode"
    class="flex items-center px-1 py-2 text-xs rounded-md cursor-pointer select-none hover:bg-zinc-100 dark:hover:bg-zinc-900"
>

    <input type="hidden" name="toggleDarkMode" :value="darkMode">

    <button
        x-ref="toggle"
        type="button"
        role="switch"
        :aria-checked="darkMode"
        :aria-labelledby="$id('toggle-label')"
        :class="darkMode ? 'bg-gray-700' : 'bg-slate-300'"
        class="relative inline-flex flex-shrink-0 py-1 ml-1 transition rounded-full focus:ring-0 w-7"
    >
        <span
            :class="darkMode ? 'translate-x-[13px]' : 'translate-x-1'"
            class="w-3 h-3 transition bg-white rounded-full shadow-md focus:outline-none"
            aria-hidden="true"
        ></span>
    </button>

    <label
        :id="$id('toggle-label')"
        :class="{ 'text-gray-600' : !darkMode, 'text-gray-300' : darkMode }"
        class="flex-shrink-0 ml-1.5 cursor-pointer font-medium"
    >
        <span x-show="!darkMode">Modo Oscuro</span>
        <span x-show="darkMode">Modo Claro</span>
    </label>

</div>
