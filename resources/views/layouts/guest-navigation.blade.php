<div x-data="{ open: false }">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4 w-full fixed z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-black text-2xl font-semibold">
                <img src="{{ asset('images/umkmm.png') }}" alt="umkm cimulang" class="w-auto h-10">
            </a>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="lg:hidden text-black focus:outline-none">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" class="h-6 w-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Main Menu -->
            <ul class="hidden lg:flex space-x-4">
                <li><a href="/" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Home</a></li>
                <li><a href="/#documentasi" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Documentasi</a></li>
                <li><a href="/#tentangkami" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Tentang Kami</a></li>
                <li><a href="/#produk" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Produk Umkm</a></li>
                <li><a href="/#hubungikami" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Hubungi Kami</a></li>
            </ul>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div
    x-show="open"
    x-transition:enter="transition-transform ease-out duration-300"
    x-transition:enter-start="transform -translate-y-full"
    x-transition:enter-end="transform translate-y-0"
    x-transition:leave="transition-transform ease-in duration-300"
    x-transition:leave-start="transform translate-y-0"
    x-transition:leave-end="transform -translate-y-full"
    class="lg:hidden fixed top-16 left-0 w-full z-50 h-60 bg-gradient-to-r from-blue-500 to-teal-400 p-4"
>
    <ul class="mt-8 space-y-4">
        <li><a href="/" class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Home</a></li>
        <li><a href="/#documentasi" class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Documentasi</a></li>
        <li><a href="/#tentangkami" class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Tentang Kami</a></li>
        <li><a href="/#produk" class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Produk Umkm</a></li>
        <li><a href="/#hubungikami" class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Hubungi Kami</a></li>
    </ul>
</div>

</div>
