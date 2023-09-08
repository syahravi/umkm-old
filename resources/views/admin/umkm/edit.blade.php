@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-white">
        <h1 class="text-3xl text-center font-bold mb-6">Edit UMKM</h1>
        <form action="{{ route('admin.umkm.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $umkm->id }}">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-semibold">Nama UMKM</label>
                <input type="text" name="name" id="nama"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400 @error('nama') border-red-500 @enderror"
                    value="{{ old('nama', $umkm->name) }}" required>
                @error('nama')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold">description UMKM</label>
                <textarea name="description" id="description"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400 @error('description') border-red-500 @enderror"
                    rows="5" required>{{ old('description', $umkm->description) }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="thumbnail" class="block text-gray-700 font-semibold">Gambar UMKM</label>
                <input type="file" name="thumbnail" id="thumbnail"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400 @error('thumbnail') border-red-500 @enderror">
                @error('thumbnail')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="thumbnail" class="block text-gray-700 font-semibold">Gambar Produk</label>
                <input type="file" name="thumbnail" id="thumbnail"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-400 @error('thumbnail') border-red-500 @enderror">
                @error('thumbnail')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg">Update</button>
        </form>
    </div>
@endsection
