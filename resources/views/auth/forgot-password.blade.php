<x-layouts.auth :title="__('Paroles atgriešana')">
    <!-- Forgot Password Card -->
    <div
        class="bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden">
        <div class="p-6">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Paroles atgriešana') }}</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-1">
                    {{ __('Jāievada e-pasts, lai nosūtītu paroles atgriešanas saiti') }}</p>
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <!-- Email Input -->
                <div class="mb-4">
                    <x-forms.input name="email" type="email" label="E-pasts" placeholder="vards@pasts.lv" />
                </div>

                <!-- Send Reset Link Button -->
                <x-button type="primary" buttonType="submit" class="w-full">
                    {{ __('Saņemt paroles atgriešanas saiti') }}
                </x-button>
            </form>

            <!-- Back to Login Link -->
            <div class="text-center mt-6">
                <a href="{{ route('login') }}"
                    class="text-blue-600 dark:text-blue-400 hover:underline font-medium">{{ __('Atgriezties') }}</a>
            </div>
        </div>
    </div>
</x-layouts.auth>
