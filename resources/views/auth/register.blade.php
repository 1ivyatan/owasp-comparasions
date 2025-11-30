<x-layouts.auth>
    <div
        class="bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden">
        <div class="p-6">
            <div class="mb-3">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Izveidot kontu') }}</h1>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-3">
                @csrf
                <!-- Full Name Input -->
                <div>
                    <x-forms.input label="Lietotājvārds" name="name" type="text" placeholder="{{ __('lietotajvards') }}" autofocus />
                </div>

                <!-- Email Input -->
                <div>
                    <x-forms.input label="E-pasts" name="email" type="email" placeholder="vards@pasts.lv" />
                </div>

                <!-- Password Input -->
                <div>
                    <x-forms.input label="Parole" name="password" type="password" placeholder="••••••••" />
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <x-forms.input label="Atkārtot paroli" name="password_confirmation" type="password"
                        placeholder="••••••••" />
                </div>

                <!-- Register Button -->
                <x-button type="primary" class="w-full">{{ __('Izveidot kontu') }}</x-button>
            </form>

            <!-- Login Link -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    <a href="{{ route('login') }}"
                        class="text-blue-600 dark:text-blue-400 hover:underline font-medium">{{ __('Pieteikties sistēmā') }}</a>
                </p>
            </div>
        </div>
    </div>
</x-layouts.auth>
