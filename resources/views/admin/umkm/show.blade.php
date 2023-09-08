<!-- resources/views/admin.umkm/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <section class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                            Nama Umkm :{{ $umkm->name }}
                            <div class="relative inline-flex">
                            </div>
                        </h1>
    
                        <p class="mt-8 text-base text-black sm:text-xl">keterangan :{{ $umkm->description }} {{ $umkm->whatsapps }}</p>
    
                        <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                            <a href="#" title="" class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-orange-500 hover:bg-orange-600 focus:bg-orange-600" role="button"> Lihat Produk </a>
                        </div>
                    </div>
                    <div>
                        <img class="w-full" src="{{ $umkm->thumbnail }}" alt="{{ $umkm->name }}" alt="umkm" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="flex items-end justify-between">
                <div class="flex-1 text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Produk UMKM</h2>
                    <p class="max-w-xl mx-auto mt-4 mb-10 leading-relaxed text-center text-gray-600">Temukan beragam produk menarik dari UMKM lokal yang siap memenuhi kebutuhan Anda!</p>
                    
                    <!-- Tombol Tambah Produk -->
                    <a href="{{ route('admin.produk.create', $umkm->id)}}" class="px-8 py-4 text-base font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400">
                        Tambah Produk
                    </a>
                </div>
            </div>
            <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
                @foreach ($products as $product)
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full" src="{{ $product->thumbnail }}" alt="" />
                                </a>
                            </div>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black">{{ $product->name }}</a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">{{ $product->description }}</p>
                    
                            <!-- Harga dan Sisa Produk -->
                            <div class="flex items-center justify-between mt-4">
                                <p class="text-xl font-semibold text-gray-800">Rp{{ $product->price }}</p>
                                <p class="text-lg text-gray-600">{{ $product->stock }}</p>
                            </div>
                    
                            <!-- Tombol Edit dan Hapus -->
                            <div class="flex justify-center mt-4 space-x-4">
                                <a href="{{ route('admin.produk.edit', ['6', '1'])}}" class="text-blue-500 hover:underline">Edit</a>
                                <button class="text-red-500 hover:underline">Hapus</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </section>
    
    {{-- <div class="items-center justify-center mt-3">

        <a href="{{ route('admin.umkm.index') }}"
            class="inline-block px-4 py-2 text-white bg-gray-600 rounded-lg hover:bg-gray-700">Kembali</a>
    </div> --}}
@endsection



