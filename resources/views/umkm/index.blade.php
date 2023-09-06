<x-guest-layout>
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
                    <a href="{{ route('umkm.show', [$umkm->id, $umkm->nama_umkm]) }}"
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
</x-guest-layout>