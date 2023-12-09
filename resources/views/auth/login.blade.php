@extends('layouts.guest-auth')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="flex h-screen">
        <!-- Gambar di sisi kiri -->
        <div class="hidden lg:flex items-center justify-center flex-1 bg-white text-black">
            <div class="w-full h-full relative">
                <div class="absolute inset-0 bg-black opacity-20"></div>
                <img src="{{ asset('images/login.jpg') }}" alt="log in umkm" class="w-full h-full object-cover" />
            </div>
        </div>
        <!-- Form di sisi kanan -->
        <div class="w-full bg-gray-100 lg:w-1/2 flex items-center justify-center">
            <div class="max-w-md w-full p-6">
                <h1 class="text-3xl font-semibold mb-6 text-black text-center">
                    Masuk ke Website UMKM Cimulang
                </h1>
                <h1 class="text-sm font-semibold mb-6 text-gray-500 text-center">
                    belum punya akun?
                    <a href="/daftar" class="text-blue-600 hover:underline">Daftar Disini</a>
                </h1>
                <div class="mt-4 flex flex-col lg:flex-row items-center justify-between">
                    <div class="w-full lg:w-1/2 mb-2 lg:mb-0">
                        <button type="button"
                            class="w-full flex justify-center items-center gap-2 bg-white text-sm text-gray-600 p-2 rounded-md hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4" id="google">
                                <path fill="#fbbb00"
                                    d="M113.47 309.408 95.648 375.94l-65.139 1.378C11.042 341.211 0 299.9 0 256c0-42.451 10.324-82.483 28.624-117.732h.014L86.63 148.9l25.404 57.644c-5.317 15.501-8.215 32.141-8.215 49.456.002 18.792 3.406 36.797 9.651 53.408z">
                                </path>
                                <path fill="#518ef8"
                                    d="M507.527 208.176C510.467 223.662 512 239.655 512 256c0 18.328-1.927 36.206-5.598 53.451-12.462 58.683-45.025 109.925-90.134 146.187l-.014-.014-73.044-3.727-10.338-64.535c29.932-17.554 53.324-45.025 65.646-77.911h-136.89V208.176h245.899z">
                                </path>
                                <path fill="#28b446"
                                    d="m416.253 455.624.014.014C372.396 490.901 316.666 512 256 512c-97.491 0-182.252-54.491-225.491-134.681l82.961-67.91c21.619 57.698 77.278 98.771 142.53 98.771 28.047 0 54.323-7.582 76.87-20.818l83.383 68.262z">
                                </path>
                                <path fill="#f14336"
                                    d="m419.404 58.936-82.933 67.896C313.136 112.246 285.552 103.82 256 103.82c-66.729 0-123.429 42.957-143.965 102.724l-83.397-68.276h-.014C71.23 56.123 157.06 0 256 0c62.115 0 119.068 22.126 163.404 58.936z">
                                </path>
                            </svg>
                            Masuk Lewat Google
                        </button>
                    </div>
                    <div class="w-full lg:w-1/2 ml-0 lg:ml-2">
                        <button type="button"
                            class="w-full flex justify-center items-center gap-2 bg-white text-sm text-gray-600 p-2 rounded-md hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="w-4">
                                <!-- Ganti path untuk ikon Facebook -->
                                <path fill="#1877f2"
                                    d="M16 8.036C16 3.594 12.418 0 7.999 0 3.584 0 0 3.594 0 8.036c0 4.22 3.082 7.732 7.073 8.348v-5.929H4.969V8.036H7.07V6.328c0-2.16 1.28-3.363 3.262-3.363.94 0 2.04.17 2.04.17v2.24h-1.145c-1.128 0-1.482.702-1.482 1.51v1.816h2.516l-.403 2.707h-2.113V16C12.918 15.94 16 12.307 16 8.036z" />
                            </svg>
                            Masuk Lewat Facebook
                        </button>

                    </div>
                </div>
                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>or with email</p>
                </div>

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf

                    <div>
                        <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
                        <x-text-input id="email"
                            class="mt-1 p-2 w-full border border-none rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300"
                            type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Kata Sandi')" class="block text-sm font-medium text-gray-700" />
                        <x-text-input id="password"
                            class="mt-1 p-2 w-full border  border-none rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300"
                            type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('kata sandi')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-800">{{ __('Ingat saya') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-800 hover:text-gray-700" href="{{ route('password.request') }}">
                                {{ __('Lupa kata sandi Anda?') }}
                            </a>
                        @endif

                        <x-primary-button
                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            {{ __('Masuk') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
