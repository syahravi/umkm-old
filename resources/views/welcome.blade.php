<x-guest-layout>
    {{-- @include('partials.navigation') --}}
    {{-- *Landing --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4  mt-16 mx-auto max-w-8xl sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="tracking-wide  mt-6 text-4xl font-bold leading-10 w-full text-black sm:text-6xl lg:text-7xl py-4"> Selamat Datang di <span class="block lg:mt-3">Website UMKM</span>
                    <span class="block h-24 lg:mt-3 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-teal-400">Desa Cimulang</span>
                </h2>
                <p class="my-4 mb-7  text-lg text-gray-600">Website ini adalah sebuah platform digital yang bertujuan untuk mendukung dan memperkuat Usaha Mikro, Kecil, dan Menengah UMKM yang berlokasi di Desa Cimulang. </p>
                <div class="flex justify-center space-x-4">
                    <a href="/info_umkm" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400  font-medium rounded-lg text-base px-8 py-4 text-center mr-2 mb-2"> Info UMKM </a>
                    <a href="https://api.whatsapp.com/qr/6KCVZL7AK5K5L1?autoload=1&app_absent=0" class="text-white bg-slate-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-800  font-medium rounded-lg text-base px-8 py-4 text-center mr-2 mb-2"> Butuh Bantuan </a>
                </div>
            </div>
            <div class="grid items-center grid-cols-1 mt-12 gap-y-10 lg:grid-cols-5 sm:mt-20 lg:flex justify-center">
                <div class="lg:col-span-3">
                    <img class="w-full mx-auto rounded-lg shadow-xl" src="{{asset('images/pusat umkm desa cimulang.webp')}}" alt="" />
                </div>
            </div>
        </div>
    </section>
    {{-- *Hero (video) --}}
    <section class="py-10 bg-gray-100 md:py-16 lg:py-24">
        <div class="container px-4 mx-auto md:flex md:items-center md:space-x-8">
            <!-- Text Container (Left) -->
            <div class="md:w-1/2">
                <!-- Teks di tengah pada layar mobile -->
                <h2 class="text-3xl font-bold mb-4 text-center md:text-5xl "> Tentang UMKM di <span class="mt-1 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-teal-400"> Desa Cimulang </span>
                </h2>
                <p class="text-gray-600 w-full text-left md:text-2xl"> Selamat datang di halaman kami yang didedikasikan untuk Usaha Mikro, Kecil, dan Menengah UMKM di Desa Cimulang. Kami berkomitmen untuk mendukung pertumbuhan dan perkembangan UMKM lokal agar dapat berkembang dan berkontribusi dalam memajukan perekonomian di wilayah ini. </p>
            </div>
            <!-- Video Container (Right) -->
            <div class="mt-8 md:w-1/2 md:mt-0">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="w-full shadow-sm " height="315px" src="https://www.youtube.com/embed/oRNfzvjXzyc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- *Card --}}
    <section class="py-10 bg-gray-100">
        <div class="container mx-auto">
            <h1
                class="text-3xl bg-clip-text text-transparent text-center bg-gradient-to-r from-blue-500 to-teal-400 font-bold mb-4 flex flex-col md:flex-row md:items-center">
                Daftar UMKM
                <a href="/info_umkm"
                    class="flex items-center mt-2 text-sm sm:text-center mx-auto text-blue-500 underline md:mt-0 md:ml-4">
                    Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 4.293a1 1 0 011.414 0L10 7.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414zM10 19a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </h1>
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($umkms as $umkm)
                    <a href=""
                        class="bg-white rounded-lg shadow-md p-3 transition-transform transform hover:text-white hover:bg-blue-200 hover:-translate-y-2 hover:shadow-lg">
                        <h2 class="text-xl font-bold text-gray-800 mb-2 text-center">{{ $umkm->nama_umkm }}</h2>
                        <img class="w-full h-56 object-cover rounded-t-lg mt-4"
                            src="{{ asset('storage/' . $umkm->id . '/' . $umkm->gambar_umkm) }}" alt="UMKM Image">
    
                        <div class="p-4">
                            <p class="text-gray-600 w-auto">{{ $umkm->deskripsi }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    
    {{-- *Login --}}
    <a href="{{ route('login') }}" class="fixed bottom-8 right-8 bg-blue-500 hover:bg-blue-600 text-white py-3 px-8 rounded-full shadow-lg flex items-center">
        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
            <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd" />
        </svg> Sign in with Google
    </a>
</x-guest-layout>