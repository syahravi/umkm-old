@extends('layouts.simple-layout')

@section('title', 'Add UMKM')

@section('content')
    <div class="bg-blue-500 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end space-x-4">
                <a href="{{ route('admin.umkm.index') }}"
                    class="inline-block bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400 text-white font-medium rounded-lg text-base px-8 py-4">
                    UMKM List
                </a>
                <a href="{{ route('admin.umkm.create') }}"
                    class="inline-block bg-green-500 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-400 text-white font-medium rounded-lg text-base px-8 py-4">
                    Add UMKM
                </a>
            </div>
        </div>
    </div>

    <div class="py-10 bg-gray-100">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data"
                class="bg-white shadow rounded-lg px-8 py-6 space-y-4">
                @csrf
                <div class="flex flex-col">
                    <h1 class="text-3xl text-center  mb-6">Tambah UMKM</h1>
                    <label for="nama" class="text-sm font-medium text-gray-700">Nama UMKM</label>
                    <input type="text" name="nama_umkm" id="nama"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('nama') border-red-500 @enderror"
                        value="{{ old('nama') }}" required>
                    @error('nama')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="deskripsi" class="text-sm font-medium text-gray-700">Deskripsi UMKM</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('deskripsi') border-red-500 @enderror"
                        rows="5" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="gambar_umkm" class="text-sm font-medium text-gray-700">Gambar UMKM</label>
                    <input type="file" name="gambar_umkm" id="gambar_umkm"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('gambar_umkm') border-red-500 @enderror"
                        required>
                    @error('gambar_umkm')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="gambar_produk" class="text-sm font-medium text-gray-700">Gambar Produk</label>
                    <input type="file" name="gambar_produk" id="gambar_produk"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('gambar_produk') border-red-500 @enderror"
                        required>
                    @error('gambar_produk')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-center items-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400 text-white font-medium rounded-lg text-base px-8 py-4 w-full">
                        Simpan
                    </button>
                </div>
                
            </form>
        </div>
    </div>
@endsection
