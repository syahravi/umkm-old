<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <!-- Gambar di sisi kiri -->
            <div class="relative flex items-end px-4 pb-10 pt-16 sm:pb-16 md:justify-center lg:pb-24 bg-gray-50 sm:px-6 lg:px-8">
                <div class="absolute inset-0">
                    <img class="object-fill w-full h-full" src="{{ asset('images/Secure login.gif') }}" alt="log in umkm" />
                </div>
            </div>

            <!-- Form di sisi kanan -->
            <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Masuk ke Program</h2>
                    <p class="mt-2 text-base text-gray-600">Belum punya akun? <a href="/register" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">Buat Akun gratis</a></p>

                    <!-- Form Login -->

                        <!-- ...Form elements... -->
                        <form method="POST" action="{{ route('login') }}" class="w-full">
                            @csrf
    
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
    
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
    
                            <div class="mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
    
                            <div class="flex items-center justify-between mt-6">
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
    
                                <x-primary-button>
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>

                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

