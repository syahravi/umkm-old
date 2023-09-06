<header class="fixed z-50 w-full bg-white shadow-md">
    <div class="px-4 mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <div class="flex-shrink-0">
                <a href="/" title="" class="flex">
                    <img class="w-auto h-14" src="{{ asset('images/umkmm.png') }}" alt="cimulang" />
                </a>
            </div>

            <button type="button"
                class="inline-flex p-1 text-black transition-all duration-200 border border-black lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="hidden ml-auto lg:flex lg:items-center lg:justify-center lg:space-x-10">
                <a href="/" title=""
                    class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Beranda
                </a>

                <a href="/#tentangkami" title=""
                    class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                    Tentang </a>

                <a href="/#produk" title=""
                    class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Produk
                    UMKM</a>

                <a href="#hubungikami" title=""
                    class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                    Hubungi Kami </a>
{{-- 
                <div class="w-px h-5 bg-black/20"></div>

                <a href="{{ route('login') }}" title=""
                    class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Masuk
                </a> --}}
            </div>
        </div>
    </div>
</header>
<div class="bg-gradient-to-b from-green-50 to-green-100">
</div>
