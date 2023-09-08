@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
{{-- start state menampilkan data umkm --}}
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 text-center ">
                <a href="{{ route('admin.umkm.index') }}"
                    class="w-full px-4 py-4 mx-auto text-base font-medium text-center text-white bg-blue-500 rounded-lg md:w-auto md:px-8 md:mx-3 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400">
                    DAFTAR UMKM
                </a>
                <a href="{{ route('admin.umkm.create') }}"
                    class="w-full px-4 py-4 mx-auto mt-4 text-base font-medium text-center text-white bg-green-500 rounded-lg md:w-auto md:px-8 md:mt-0 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-400">
                    TAMBAH UMKM
                </a>
            </div>                     
            <div class="text-center">
                <h2 class="mt-10 text-3xl font-extrabold leading-tight text-black uppercase sm:text-4xl lg:text-5xl">Panel Utama</h2>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-16 text-center sm:gap-x-8 md:grid-cols-3">
                <div class="mb-5 shadow-md">
                    <h3 class="font-bold text-7xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400"> total user  </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Membuat Data Umkm</p>
                    <p class="text-base mt-0.5 text-gray-500 p-2">Memajukan UMKM CIMULANG</p>
                </div>

                <div class="mb-5 shadow-md">
                    <h3 class="font-bold text-7xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400"> total umkm </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">kemitraan umkm</p>
                    <p class="text-base mt-0.5 text-gray-500 p-5">kemajuan dalam berbisnis</p>
                </div>

                <div class="mb-5 shadow-md">
                    <h3 class="font-bold text-7xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400"> total produk </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">identitas produk khas</p>
                    <p class="text-base mt-0.5 text-gray-500 p-5">mamajukan ekonomi</p>
                </div>
            </div>
        </div>
    </div>
</section>
    {{-- <div class="py-10 bg-gray-100">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Loop through the UMKMs from the controller and display the cards -->
                @foreach ($umkms as $umkm)
                    <div class="p-3 bg-white rounded-lg shadow-md">
                        <h2 class="mb-2 text-xl font-bold text-center text-gray-800">{{ $umkm->name }}</h2>
                        <img class="object-cover w-full h-56 rounded-t-lg"
                        src="{{ asset('storage/' . $umkm->id . '/'. $umkm->thumbnail) }}" alt="{{ $umkm->name }} Image">

                        <div class="p-4">
                            <p class="w-auto text-gray-600">{{ $umkm->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
@endsection
