<x-layouts.app :title="__('Izveidot pieteikumu')">
    <x-layouts.registration.forms :method="__('POST')" action="{{ route('registration.store') }}" />
</x-layouts.app>