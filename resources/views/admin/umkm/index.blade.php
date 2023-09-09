@extends('layouts.app')

@section('content')
    <div class="container py-8 mx-auto">
        <h1 class="mb-4 text-3xl font-bold text-center md:text-5xl">Daftar UMKM
            <a href="{{ route('admin.umkm.create') }}"
            class="inline-block px-4 py-2 mb-4 font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600">
            Tambah UMKM
        </a>
        </h1>
        
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($umkms as $umkm)
                <div class="p-4 border rounded-lg shadow-md">
                    <div class="mb-2 text-center">
                        <img src="{{ $umkm->thumbnail }}"
                            alt="{{ $umkm->name }}" class="object-cover w-full h-32 mx-auto rounded-lg">
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold">Nama:</span>
                        {{ $umkm->name }}
                    </div>
                    <div class="mb-2 ">
                        <span class="font-semibold">description:</span>
                        <p class="w-auto h-16 overflow-y-auto">{{ $umkm->description }}</p>
                        <span>{{ $umkm->whatsapps }}</span>
                    </div>
                    <div class="flex justify-center">
                        <a href="{{ route('admin.umkm.show', $umkm) }}"
                            class="inline-block px-2 py-1 mx-1 font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                            Lihat
                        </a>
                        <a href="{{ route('admin.umkm.edit', $umkm) }}"
                            class="inline-block px-2 py-1 mx-1 font-medium text-white bg-green-500 rounded-lg hover:bg-green-600">
                            Edit
                        </a>
                        <form action="{{ route('admin.umkm.destroy', $umkm) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="inline-block px-2 py-1 mx-1 font-medium text-white bg-red-500 rounded-lg hover:bg-red-600"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
