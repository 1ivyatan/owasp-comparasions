<x-layouts.app>
    <div class="mb-6 flex items-center text-sm">
        <a href="{{ route('main') }}"
            class="text-blue-600 dark:text-blue-400 hover:underline">{{ __('Sākums') }}</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
        <span class="text-gray-500 dark:text-gray-400">{{ __('Drošības salīdzinājumi') }}</span>
    </div>

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Main')}}</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-1">{{ __('Welcome to the ') }}</p>
    </div>

    <p> something something comparasions </p>

</x-layouts.app>
