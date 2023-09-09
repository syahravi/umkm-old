<x-guest-layout>
    <section class="py-10 bg-gray-100">
        <div class="container mx-auto mt-10">
            <div class="p-5 text-center text-white jumbotron bg-gradient-to-r from-blue-500 to-teal-400">
                <h1 class="mb-4 text-6xl font-extrabold">Daftar UMKM</h1>
                <p class="mx-auto mb-4 text-md sm:text-center">Temukan berbagai UMKM lokal yang menarik di daerah Anda.</p>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Konten UMKM -->
                @foreach ($umkms as $umkm)
                    <a href="{{ route('umkm.show', $umkm->id) }}"
                        class="p-3 transition-transform transform bg-white rounded-lg shadow-md hover:text-white hover:bg-blue-200 hover:-translate-y-2 hover:shadow-lg">
                        <h2 class="mb-2 text-xl font-bold text-center text-gray-800">{{ $umkm->name }}</h2>
                        <img class="object-cover w-full h-56 mt-4 rounded-t-lg"
                            src="{{ $umkm->thumbnail }}" alt="UMKM Image">
                        <div class="p-4">
                            <p class="w-auto text-gray-600">{{ $umkm->description }}</p>
                            <span>{{ $umkm->whatsapps }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>    
</x-guest-layout>