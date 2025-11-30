<x-layouts.app :title="__('Izveidot pieteikumu')">
    <div class="mb-6 flex items-center text-sm">
        <a href="{{ route('main') }}"
            class="text-blue-600 dark:text-blue-400 hover:underline">{{ __('Sākums') }}</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
        <a href="{{ route('registrations.index') }}"
            class="text-blue-600 dark:text-blue-400 hover:underline">{{ __('Pieteikumi') }}</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
        <span class="text-gray-500 dark:text-gray-400">{{ __('Pieteikuma izveide') }}</span>
    </div>

    <x-layouts.registration.forms :method="__('POST')" action="{{ route('registrations.store') }}" />
</x-layouts.app>