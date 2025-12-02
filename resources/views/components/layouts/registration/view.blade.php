@props([
    'content' => []
])

<div class="mb-6 flex justify-between">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Pieteikums #').$content->id}}</h1>

    <div class="flex gap-2">
        <x-button tag="a" type="primary" href="{{ route('registrations.edit', $content->id) }}">{{ __('Rediģēt') }}</x-button>

        <form action="{{ route('registrations.destroy', $content->id) }}" method="POST"
            onsubmit="return confirm('{{ __('Tiešām dzēst šo pieteikumu?') }}')">
            @csrf
            @method('DELETE')
            <x-button type="danger">{{ __('Dzēst pieteikumu') }}</x-button>
        </form>

    </div>
</div>

<div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border mb-4">
    <table class="w-full text-left table-auto min-w-max text-slate-800">
        <thead>
            <tr class="text-slate-500 border-b border-slate-300 bg-slate-50">
                <th class="p-4">
                    {{ __('Pamatinformācija') }}
                </th>
                <th class="p-4"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-slate-50">
                <td class="p-4">
                    <p class="text-sm">
                        {{ __('E-pasts') }}
                    </p>
                </td>
                <td class="p-4">
                    <p class="text-sm">
                        {{ $content->email }}
                    </p>
                </td>
            </tr>

            <tr class="hover:bg-slate-50">
                <td class="p-4">
                    <p class="text-sm">
                        {{ __('Tālrunis') }}
                    </p>
                </td>
                <td class="p-4">
                    <p class="text-sm">
                        {{ $content->phone }}
                    </p>
                </td>
            </tr>

            <tr class="hover:bg-slate-50">
                <td class="p-4">
                    <p class="text-sm">
                        {{ __('Temats') }}
                    </p>
                </td>
                <td class="p-4">
                    <p class="text-sm wrap-break-word">
                        {{ $content->title }}
                    </p>
                </td>
            </tr>

            <tr class="hover:bg-slate-50">
                <td class="p-4">
                    <p class="text-sm">
                        {{ __('Prioritāte') }}
                    </p>
                </td>
                <td class="p-4">
                    <p class="text-sm">
                        @switch(App\Enums\Registration\Priority::from($content->priority))
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
            </tr>
        </tbody>
    </table>
</div>

<div
    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden mb-6"
>
    <div class="p-4 font-bold text-slate-500 border-b border-slate-300 bg-slate-50">
        {{ __('Ziņojums') }}
    </div>
    <div class="p-4 overflow-y-auto wrap-break-word">
        {{ $content->message }}
    </div>
</div>