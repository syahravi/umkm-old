@extends('layouts.app')

@section('content')
<div class="py-10 bg-gray-100">
    <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('admin.produk.store', $umkm->id) }}" method="POST" enctype="multipart/form-data"
            class="px-8 py-6 space-y-4 bg-white rounded-lg shadow">
            @csrf
            <input type="hidden" name="umkm_id" value="{{ $umkm->id }}">
            <h1 class="mb-6 text-3xl text-center">Tambah Produk</h1>
            
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" name="name" id="name"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('name') @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col">
                <label for="description" class="text-sm font-medium text-gray-700">description Produk</label>
                <textarea name="description" id="description"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('description') @enderror"
                    rows="5" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col">
                <label for="price" class="text-sm font-medium text-gray-700">Harga Produk</label>
                <input type="number" name="price" id="price"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('price') @enderror"
                    required>
                @error('price')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="stock" class="text-sm font-medium text-gray-700">Sisa Produk</label>
                <input type="number" name="stock" id="stock"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('stock') @enderror"
                    required>
                @error('stock')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="thumbnail" class="text-sm font-medium text-gray-700">Gambar produk</label>
                <input type="file" name="thumbnail" id="thumbnail"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('thumbnail') @enderror"
                    required>
                @error('thumbnail')
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
