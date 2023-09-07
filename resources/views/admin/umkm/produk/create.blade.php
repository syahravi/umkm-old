@extends('layouts.app')

@section('content')
<div class="py-10 bg-gray-100">
    <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data"
            class="px-8 py-6 space-y-4 bg-white rounded-lg shadow">
            @csrf
            <h1 class="mb-6 text-3xl text-center">Tambah Produk</h1>
            
            <div class="flex flex-col">
                <label for="nama" class="text-sm font-medium text-gray-700">Nama produk</label>
                <input type="text" name="nama_umkm" id="nama"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('nama') @enderror"
                    value="{{ old('nama') }}" required>
                @error('nama')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col">
                <label for="deskripsi" class="text-sm font-medium text-gray-700">Deskripsi produk</label>
                <textarea name="deskripsi" id="deskripsi"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('deskripsi') @enderror"
                    rows="5" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col">
                <label for="harga_produk" class="text-sm font-medium text-gray-700">Harga produk</label>
                <input type="number" name="harga_produk" id="harga_produk"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('harga_produk') @enderror"
                    required>
                @error('harga_produk')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="sisa_produk" class="text-sm font-medium text-gray-700">Sisa Produk</label>
                <input type="number" name="sisa_produk" id="sisa_produk"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('sisa_produk') @enderror"
                    required>
                @error('sisa_produk')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="gambar_produk" class="text-sm font-medium text-gray-700">Gambar produk</label>
                <input type="file" name="gambar_produk" id="gambar_produk"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('gambar_produk') @enderror"
                    required>
                @error('gambar_produk')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="w-full px-8 py-4 text-base font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
