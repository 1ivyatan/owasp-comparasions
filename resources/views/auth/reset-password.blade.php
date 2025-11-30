<x-layouts.auth :title="__('Paroles atgriešana')">
    <!-- Reset Password Card -->
    <div
        class="bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden">
        <div class="p-6">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Paroles atgriešana') }}</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-1">{{ __('Ievadiet e-pastu jaunu paroli.') }}
                </p>
            </div>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ request()->route('token') }}">

                <!-- Email Input -->
                <div class="mb-4">
                    <x-forms.input name="email" type="email" label="E-pasts"
                        value="{{ old('email', request('email')) }}" placeholder="vards@pasts.lv" />
                </div>

                <!-- Password Input -->
                <div class="mb-4">
                    <x-forms.input name="password" type="password" label="Parole" placeholder="••••••••" />
                </div>

                <!-- Confirm Password Input -->
                <div class="mb-4">
                    <x-forms.input name="password_confirmation" type="password" label="Atkārtot paroli"
                        placeholder="••••••••" />
                </div>

                <!-- Reset Password Button -->
                <x-button type="primary" buttonType="submit" class="w-full">
                    {{ __('Mainīt paroli') }}
                </x-button>
            </form>

            <!-- Back to Login Link -->
            <div class="text-center mt-6">
                <a href="{{ route('login') }}"
                    class="text-blue-600 dark:text-blue-400 hover:underline font-medium">{{ __('Pieteikties sistēmā') }}</a>
            </div>
        </div>
    </div>
</x-layouts.auth>
