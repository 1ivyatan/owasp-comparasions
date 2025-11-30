<x-layouts.app :title="__('Pieteikumi')">

    <div class="mb-6 flex justify-between">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Pieteikumi')}}</h1>

        <x-button tag="a" type="primary" href="{{ route('registrations.create') }}">{{ __('Izveidot') }}</x-button>
    </div>

    {{-- material-tailwind.com --}}

    @if (isset($registrations))

    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
        <table class="w-full text-left table-auto min-w-max text-slate-800">
            <thead>
                <tr class="text-slate-500 border-b border-slate-300 bg-slate-50">
                    <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            #
                        </p>
                    </th>
                    <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            Tālrunis
                        </p>
                    </th>
                    <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            Nosaukums
                        </p>
                    </th>
                    <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            Prioritāte
                        </p>
                    </th>
                    <th class="p-4"><p class="text-sm leading-none font-normal"></p></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registrations as $registration)
                    <tr class="hover:bg-slate-50">
                        <td class="p-4">
                            <p class="text-sm">
                                {{ $registration->id }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                {{ $registration->phone }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                {{ $registration->title }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                @switch(App\Enums\Registration\Priority::from($registration->priority))
                                    @case(App\Enums\Registration\Priority::LOW)
                                        {{ __('Zema') }}
                                        @break

                                    @case(App\Enums\Registration\Priority::MED)
                                        {{ __('Vidēja') }}
                                        @break

                                    @case(App\Enums\Registration\Priority::HIGH)
                                        {{ __('Augsta') }}
                                        @break
                                
                                    @default
                                        {{ __('Nezināma') }}
                                        @break
                                @endswitch
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                <x-button tag="a" type="secondary" href="{{ route('registrations.show', $registration->id ) }}">{{ __('Skatīt') }}</x-button>
                            </p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
    @else
        <p class="text-gray-600 dark:text-gray-400 mt-1">{{ __('Nav pieteikumu!') }}</p>
    @endif
</x-layouts.app>
