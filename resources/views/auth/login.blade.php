<x-layouts.auth :title="__('Pieteikšanās')">
    <!-- Login Card -->
    <div
        class="bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden">
        <div class="p-6">
            <div class="mb-3">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Pieteikties sistēmā') }}</h1>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-3">
                @csrf
                <!-- Email Input -->
                <div>
                    <x-forms.input label="E-pasts" name="email" type="email" placeholder="vards@pasts.lv" autofocus />
                </div>

                <!-- Password Input -->
                <div>
                    <x-forms.input label="Parole" name="password" type="password" placeholder="••••••••" />

                    <!-- Remember me & password reset -->
                    <div class="flex items-center justify-between mt-2">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-xs text-blue-600 dark:text-blue-400 hover:underline">{{ __('Paroles atgriešana') }}</a>
                        @endif
                        <x-forms.checkbox label="Saglabāt pieteikuma datus" name="remember" />
                    </div>
                </div>

                <!-- Login Button -->
                <x-button type="primary" class="w-full">{{ __('Pieteikties') }}</x-button>
            </form>

            @if (Route::has('register'))
                <!-- Register Link -->
                <div class="text-center mt-6">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        <a href="{{ route('register') }}"
                            class="text-blue-600 dark:text-blue-400 hover:underline font-medium">{{ __('Izveidot kontu') }}</a>
                    </p>
                </div>
            @endif
        </div>
    </div>
</x-layouts.auth>
