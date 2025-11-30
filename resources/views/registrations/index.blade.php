<x-layouts.app :title="__('Pieteikumi')">

    <div class="mb-6 flex justify-between">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Pieteikumi')}}</h1>

        <x-button tag="a" type="primary" href="{{ route('registrations.create') }}">{{ __('Izveidot') }}</x-button>
    </div>

    @forelse ( $registrations as $registration )
        {{ $registration }}    
    @empty
        <p class="text-gray-600 dark:text-gray-400 mt-1">{{ __('Nav pieteikumu!') }}</p>
    @endforelse

</x-layouts.app>
