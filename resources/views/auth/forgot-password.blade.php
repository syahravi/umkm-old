<x-guest-layout>
    <main id="content" role="main" class="w-full max-w-md mx-auto p-6 ">
        <div class="absolute inset-0"style="background-image: url('{{ asset('images/beaground.jpg') }}'); background-size: cover; background-position: center;"></div>
        <div class="w-full max-w-md mx-auto p-6 relative z-10">
            <div
                class="mt-7 bg-white rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 border-2 border-indigo-300">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            Remember your password?
                            <a class="text-blue-600 decoration-2 hover:underline font-medium" href="/masuk">
                                Login here
                            </a>
                        </p>
                    </div>
                    <div class="mt-5">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="grid gap-y-4">
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <div class="relative">
                                        <x-text-input id="email" name="email"
                                            class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                            :value="old('email')" required autofocus />
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <x-primary-button
                                    class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                    {{ __('Reset password') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</x-guest-layout>
