<x-guest-layout>
    {{-- *Landing --}}
    <section class="sm:py-16 lg:py-24 ">
        <div class="px-4 max-w-8xl sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center ">
                <h2 class="w-full py-4 text-4xl font-bold leading-10 tracking-wide text-black sm:text-6xl lg:tex t-7xl">
                    Selamat Datang di <span class="block mt-10 lg:mt-3">Website UMKM</span>
                    <span
                        class="block h-24 text-transparent lg:mt-3 bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400">Desa
                        Cimulang</span>
                </h2>
                <p class="my-4 text-lg text-gray-600 mb-7">Website ini adalah sebuah platform digital yang bertujuan
                    untuk mendukung dan memperkuat Usaha Mikro, Kecil, dan Menengah UMKM yang berlokasi di Desa
                    Cimulang. </p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('umkm.index') }}"
                        class="px-8 py-4 mb-2 mr-2 text-base font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400">
                        Info UMKM </a>
                    <a href="https://api.whatsapp.com/qr/6KCVZL7AK5K5L1?autoload=1&app_absent=0"
                        class="px-8 py-4 mb-2 mr-2 text-base font-medium text-center text-white rounded-lg bg-slate-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-800">
                        Butuh Bantuan </a>
                </div>
            </div>
            <div class="grid items-center justify-center grid-cols-1 mt-12 gap-y-10 lg:grid-cols-5 sm:mt-20 lg:flex">
                <div class="lg:col-span-3">
                    <img class="w-full mx-auto rounded-lg shadow-xl"
                        src="{{ asset('images/pusat umkm desa cimulang.webp') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    {{-- *Hero (video) --}}
    <section id="tentangkami" class="py-10 bg-gray-100 md:py-16 lg:py-24">
        <div class="container px-4 mx-auto md:flex md:items-center md:space-x-8">
            <!-- Text Container (Left) -->
            <div class="md:w-1/2">
                <!-- Teks di tengah pada layar mobile -->
                <h2 class="mb-4 text-3xl font-bold text-center md:text-5xl "> Tentang UMKM di <span
                        class="mt-1 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400"> Desa
                        Cimulang </span>
                </h2>
                <p class="w-full text-left text-gray-600 md:text-2xl"> Selamat datang di halaman kami yang didedikasikan
                    untuk Usaha Mikro, Kecil, dan Menengah UMKM di Desa Cimulang. Kami berkomitmen untuk mendukung
                    pertumbuhan dan perkembangan UMKM lokal agar dapat berkembang dan berkontribusi dalam memajukan
                    perekonomian di wilayah ini. </p>
            </div>
            <!-- Video Container (Right) -->
            <div class="mt-8 md:w-1/2 md:mt-0">
                <div class="aspect-w-16 aspect-h-9">
                    {{-- <iframe class="w-full shadow-sm " height="315px" src="https://www.youtube.com/embed/oRNfzvjXzyc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe> --}}
                </div>
            </div>
        </div>
    </section>
    {{-- *Card --}}
    <section id="produk" class="py-10 bg-white">
        <div class="container mx-auto">
            <h1
                class="flex flex-col mb-4 text-3xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400 md:flex-row md:items-center">
                Daftar UMKM
                <a href="{{ route('umkm.index')}}"
                    class="flex items-center mx-auto mt-2 text-sm text-blue-500 underline sm:text-center md:mt-0 md:ml-4">
                    Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 -mr-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 4.293a1 1 0 011.414 0L10 7.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414zM10 19a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </h1>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($umkms as $umkm)
                    <a href="{{ route('umkm.show', $umkm->id) }}"
                        class="p-3 transition-transform transform bg-white rounded-lg shadow-md hover:text-white hover:bg-blue-200 hover:-translate-y-2 hover:shadow-lg">
                        <h2 class="mb-2 text-xl font-bold text-center text-gray-800">{{ $umkm->name }}</h2>
                        <img class="object-cover w-full h-56 mt-4 rounded-t-lg"
                            src="{{ $umkm->thumbnail }}" alt="UMKM Image">

                        <div class="p-4">
                            <p class="w-auto text-gray-600  h-20 overflow-y-auto">{{ $umkm->description }}</p>
                            <button class=" text-white  rounded-lg flex items-center mx-auto mt-2 p-2 bg-teal-500">{{ $umkm->whatsapps }}</button>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- form pengaduan --}}
    <section id="hubungikami" class="h-auto mx-auto bg-gray-100 ">
        <h1
            class="p-5 mt-10 mb-4 text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400">
            Hubungi Kami
        </h1>
        <div class="grid w-full grid-cols-1 gap-6 mx-auto mt-12 md:grid-cols-2">
            <!-- Bagian Form -->
            <div class="p-6 rounded-lg shadow-md bg-gradient-to-r from-blue-500 to-teal-400 ">
                <form>
                    <!-- Name input -->
                    <div class="mb-6">
                        <label for="name" class="text-white">Nama</label>
                        <input type="text" id="name"
                            class="block w-full px-3 py-2 transition duration-200 border rounded border-neutral-300 focus:outline-none focus:ring-blue focus:border-blue "
                            placeholder="Nama" />
                    </div>

                    <!-- Email input -->
                    <div class="mb-6">
                        <label for="email" class="text-white">Alamat email</label>
                        <input type="email" id="email"
                            class="block w-full px-3 py-2 transition duration-200 border rounded border-neutral-300 focus:outline-none focus:ring-blue focus:border-blue "
                            placeholder="Alamat email" />
                    </div>

                    <!-- Message textarea -->
                    <div class="mb-6">
                        <label for="message" class="text-white">
                            Pesan</label>
                        <textarea id="message" rows="3"
                            class="block w-full px-3 py-2 transition duration-200 border rounded border-neutral-300 focus:outline-none focus:ring-blue focus:border-blue "
                            ></textarea>
                    </div>

                    <!-- Checkbox -->
                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="sendCopy"
                            class="w-5 h-5 border rounded form-checkbox text-blue border-neutral-300 focus:ring-blue " />
                        <label for="sendCopy" class="ml-2 text-white cursor-pointer">
                            Kirimkan saya salinan pesan ini
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit"
                        class="w-full px-4 py-3 mt-6 text-white bg-gray-800 rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:ring-blue">
                        Kirim
                    </button>
                </form>
            </div>
            <!-- Gambar di Samping -->
            <div class="hidden md:block">
                <img src="{{ asset('images/Fill out-pana.svg') }}" alt="Gambar Anda"
                    class="object-cover object-center w-full h-full rounded-lg" />
            </div>
        </div>
    </section>
    {{-- *Login --}}
    {{-- <a href="{{ route('login') }}" class="fixed flex items-center px-8 py-3 text-white bg-blue-500 rounded-full shadow-lg bottom-8 right-8 hover:bg-blue-600">
        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
            <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd" />
        </svg> Sign in with Google
    </a> --}}
    @include('partials.footer')
</x-guest-layout>
