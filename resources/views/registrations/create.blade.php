<x-layouts.app :title="__('Izveidot pieteikumu')">
    <x-layouts.registration.forms :method="__('POST')" action="{{ route('registrations.store') }}" />
</x-layouts.app>