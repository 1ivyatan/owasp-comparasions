<x-layouts.app :title="__('Rediģēt pieteikumu')">
    <x-layouts.registration.forms :method="__('PUT')" action="{{ route('registrations.update', $registration->id ) }}" :content="$registration"/>
</x-layouts.app>