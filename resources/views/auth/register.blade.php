<x-guest-layout>
    <section class="container mx-auto rounded-lg ">
        <div class="grid grid-cols-1 lg:grid-cols-2 ">
            <!-- Gambar di sisi kiri -->
            <!-- Form di sisi kanan -->
            <div class="flex items-center justify-center px-4 py-10 sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="w-full xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-center text-transparent text-black sm:text-4xl bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400">Membuat Akun</h2>
                    <!-- Form Login -->
                    <form method="POST" action="{{ route('register') }}" class="w-full p-6">
                        @csrf
                        
                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Nama')" />
                            <x-text-input id="name" class="mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2 text-red-500" />
                        </div>
                    
                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                        </div>
                    
                        <!-- Password -->
                        <div class="mb-4">
                            <x-input-label for="password" :value="__('Kata Sandi')" />
                            <x-text-input id="password" class="mt-1" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                        </div>
                    
                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <x-input-label for="password_confirmation" :value="__('Ulangi Sandi')" />
                            <x-text-input id="password_confirmation" class="mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                        </div>
                    
                        <div class="flex items-center justify-between mt-4">
                            <a class="text-sm text-gray-600 transition-all duration-200 hover:text-gray-900 hover:underline" href="{{ route('login') }}">
                                {{ __('Sudah terdaftar?') }}
                            </a>
                    
                            <x-primary-button>
                                {{ __('Daftar') }}
                            </x-primary-button>
                        </div>
                    </form> 
                </div>
            </div>
            <div class="relative flex items-end px-4 pt-16 pb-10 sm:pb-16 md:justify-center lg:pb-24 sm:px-6 lg:px-8">
                <div class="absolute inset-0">
                  <img class="hidden object-fill w-full h-auto lg:block me-64" src="{{ asset('images/Tablet login-cuate.png') }}" alt="log in umkm" />
                </div>
              </div>              
        </div>
    </section>
</x-guest-layout>
