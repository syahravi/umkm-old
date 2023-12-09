<div x-data="{ open: false }">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-semibold">
                <img src="{{asset('images/umkmm.png')}}" alt="umkm cimulang" class="w-auto h-10">
            </a>

            <!-- Tombol Menu Mobile -->
            <button @click="open = !open" class="lg:hidden text-white focus:outline-none">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Menu Utama -->
            <ul class="hidden lg:flex space-x-4">
                <li><a href="/" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Home</a></li>
                <li><a href="#tentangkami" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Tentang Kami</a></li>
                <li><a href="#produk" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Produk Umkm</a></li>
                <li><a href="#hubungikami" class="text-dark hover:text-blue-600 transition-colors duration-300 font-sans font-bold">Hubungi Kami</a></li>
            </ul>
        </div>
    </nav>

    <!-- Menu Mobile -->
    <div x-show="open" class="lg:hidden bg-gradient-to-r from-blue-500 to-teal-400 p-4">
        <ul class="space-y-4">
            <li><a href="#"  class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Home</a></li>
            <li><a href="#tentangkami"  class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Tentang Kami</a></li>
            <li><a href="#produk"  class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Produk Umkm</a></li>
            <li><a href="#hubungikami"  class="text-white hover:text-teal-400 transition-colors duration-300 font-sans font-bold">Hubungi Kami</a></li>
        </ul>
    </div>
</div>