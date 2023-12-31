@extends('layouts.app')

@section('title', 'Add UMKM')

@section('content')
    <div class="py-4 mt-3 rounded-md w-5/12 mx-auto">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4">
                <a href="{{ route('admin.umkm.index') }}"
                    class="inline-block px-8 py-4 text-base font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400">
                    UMKM List
                </a>
                <a href="{{ route('admin.umkm.create') }}"
                    class="inline-block px-8 py-4 text-base font-medium text-white bg-green-500 rounded-lg hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-400">
                    Add UMKM
                </a>
            </div>
        </div>
    </div>

    <div class="py-10 bg-gray-100">
        <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data"
                class="px-8 py-6 space-y-4 bg-white rounded-lg shadow">
                @csrf
                <div class="flex flex-col">
                    <h1 class="mb-6 text-3xl text-center">Tambah UMKM</h1>
                    <label for="name" class="text-sm font-medium text-gray-700">Nama UMKM</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('name') @enderror"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="description" class="text-sm font-medium text-gray-700">description UMKM</label>
                    <textarea name="description" id="description"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('description') @enderror"
                        rows="5" required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="whatsapps" class="text-sm font-medium text-gray-700">Nomor WhatsApps <span class="text-gray-400">(Contoh: 6288290500979)</span></label>
                    <input type="number" name="whatsapps" id="whatsapps"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('whatsapps') @enderror"
                        required>
                    @error('whatsapps')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="thumbnail" class="text-sm font-medium text-gray-700">Gambar UMKM</label>
                    <input type="file" name="thumbnail" id="thumbnail"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('thumbnail') @enderror"
                        required>
                    @error('thumbnail')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="w-full px-8 py-4 text-base font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
