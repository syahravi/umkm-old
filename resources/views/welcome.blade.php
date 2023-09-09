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
                            <button class="  text-white  rounded-lg flex items-center mx-auto mt-2 p-2 bg-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-auto h-7  me-2" viewBox="0,0,256,256"
                                style="fill:#000000;">
                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.69047,0 -23,10.30953 -23,23c0,4.0791 1.11869,7.88588 2.98438,11.20898l-2.94727,10.52148c-0.09582,0.34262 -0.00241,0.71035 0.24531,0.96571c0.24772,0.25536 0.61244,0.35989 0.95781,0.27452l10.9707,-2.71875c3.22369,1.72098 6.88165,2.74805 10.78906,2.74805c12.69047,0 23,-10.30953 23,-23c0,-12.69047 -10.30953,-23 -23,-23zM25,4c11.60953,0 21,9.39047 21,21c0,11.60953 -9.39047,21 -21,21c-3.72198,0 -7.20788,-0.97037 -10.23828,-2.66602c-0.22164,-0.12385 -0.48208,-0.15876 -0.72852,-0.09766l-9.60742,2.38086l2.57617,-9.19141c0.07449,-0.26248 0.03851,-0.54399 -0.09961,-0.7793c-1.84166,-3.12289 -2.90234,-6.75638 -2.90234,-10.64648c0,-11.60953 9.39047,-21 21,-21zM16.64258,13c-0.64104,0 -1.55653,0.23849 -2.30859,1.04883c-0.45172,0.48672 -2.33398,2.32068 -2.33398,5.54492c0,3.36152 2.33139,6.2621 2.61328,6.63477h0.00195v0.00195c-0.02674,-0.03514 0.3578,0.52172 0.87109,1.18945c0.5133,0.66773 1.23108,1.54472 2.13281,2.49414c1.80347,1.89885 4.33914,4.09336 7.48633,5.43555c1.44932,0.61717 2.59271,0.98981 3.45898,1.26172c1.60539,0.5041 3.06762,0.42747 4.16602,0.26563c0.82216,-0.12108 1.72641,-0.51584 2.62109,-1.08203c0.89469,-0.56619 1.77153,-1.2702 2.1582,-2.33984c0.27701,-0.76683 0.41783,-1.47548 0.46875,-2.05859c0.02546,-0.29156 0.02869,-0.54888 0.00977,-0.78711c-0.01897,-0.23823 0.0013,-0.42071 -0.2207,-0.78516c-0.46557,-0.76441 -0.99283,-0.78437 -1.54297,-1.05664c-0.30567,-0.15128 -1.17595,-0.57625 -2.04883,-0.99219c-0.8719,-0.41547 -1.62686,-0.78344 -2.0918,-0.94922c-0.29375,-0.10568 -0.65243,-0.25782 -1.16992,-0.19922c-0.51749,0.0586 -1.0286,0.43198 -1.32617,0.87305c-0.28205,0.41807 -1.4175,1.75835 -1.76367,2.15234c-0.0046,-0.0028 0.02544,0.01104 -0.11133,-0.05664c-0.42813,-0.21189 -0.95173,-0.39205 -1.72656,-0.80078c-0.77483,-0.40873 -1.74407,-1.01229 -2.80469,-1.94727v-0.00195c-1.57861,-1.38975 -2.68437,-3.1346 -3.0332,-3.7207c0.0235,-0.02796 -0.00279,0.0059 0.04687,-0.04297l0.00195,-0.00195c0.35652,-0.35115 0.67247,-0.77056 0.93945,-1.07812c0.37854,-0.43609 0.54559,-0.82052 0.72656,-1.17969c0.36067,-0.71583 0.15985,-1.50352 -0.04883,-1.91797v-0.00195c0.01441,0.02867 -0.11288,-0.25219 -0.25,-0.57617c-0.13751,-0.32491 -0.31279,-0.74613 -0.5,-1.19531c-0.37442,-0.89836 -0.79243,-1.90595 -1.04102,-2.49609v-0.00195c-0.29285,-0.69513 -0.68904,-1.1959 -1.20703,-1.4375c-0.51799,-0.2416 -0.97563,-0.17291 -0.99414,-0.17383h-0.00195c-0.36964,-0.01705 -0.77527,-0.02148 -1.17773,-0.02148zM16.64258,15c0.38554,0 0.76564,0.0047 1.08398,0.01953c0.32749,0.01632 0.30712,0.01766 0.24414,-0.01172c-0.06399,-0.02984 0.02283,-0.03953 0.20898,0.40234c0.24341,0.57785 0.66348,1.58909 1.03906,2.49023c0.18779,0.45057 0.36354,0.87343 0.50391,1.20508c0.14036,0.33165 0.21642,0.51683 0.30469,0.69336v0.00195l0.00195,0.00195c0.08654,0.17075 0.07889,0.06143 0.04883,0.12109c-0.21103,0.41883 -0.23966,0.52166 -0.45312,0.76758c-0.32502,0.37443 -0.65655,0.792 -0.83203,0.96484c-0.15353,0.15082 -0.43055,0.38578 -0.60352,0.8457c-0.17323,0.46063 -0.09238,1.09262 0.18555,1.56445c0.37003,0.62819 1.58941,2.6129 3.48438,4.28125c1.19338,1.05202 2.30519,1.74828 3.19336,2.2168c0.88817,0.46852 1.61157,0.74215 1.77344,0.82227c0.38438,0.19023 0.80448,0.33795 1.29297,0.2793c0.48849,-0.05865 0.90964,-0.35504 1.17773,-0.6582l0.00195,-0.00195c0.3568,-0.40451 1.41702,-1.61513 1.92578,-2.36133c0.02156,0.0076 0.0145,0.0017 0.18359,0.0625v0.00195h0.00195c0.0772,0.02749 1.04413,0.46028 1.90625,0.87109c0.86212,0.41081 1.73716,0.8378 2.02148,0.97852c0.41033,0.20308 0.60422,0.33529 0.6543,0.33594c0.00338,0.08798 0.0068,0.18333 -0.00586,0.32813c-0.03507,0.40164 -0.14243,0.95757 -0.35742,1.55273c-0.10532,0.29136 -0.65389,0.89227 -1.3457,1.33008c-0.69181,0.43781 -1.53386,0.74705 -1.8457,0.79297c-0.9376,0.13815 -2.05083,0.18859 -3.27344,-0.19531c-0.84773,-0.26609 -1.90476,-0.61053 -3.27344,-1.19336c-2.77581,-1.18381 -5.13503,-3.19825 -6.82031,-4.97266c-0.84264,-0.8872 -1.51775,-1.71309 -1.99805,-2.33789c-0.4794,-0.62364 -0.68874,-0.94816 -0.86328,-1.17773l-0.00195,-0.00195c-0.30983,-0.40973 -2.20703,-3.04868 -2.20703,-5.42578c0,-2.51576 1.1685,-3.50231 1.80078,-4.18359c0.33194,-0.35766 0.69484,-0.41016 0.8418,-0.41016z"></path></g></g>
                                </svg> {{$umkm->whatsapps}} </button>
                            </button>
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
