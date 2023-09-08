@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl md:text-5xl text-center font-bold mb-4">Daftar UMKM
            <a href="{{ route('umkms.create') }}"
            class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg mb-4">
            Tambah UMKM
        </a>
        </h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($umkms as $umkm)
                <div class="border rounded-lg p-4">
                    <div class="text-center mb-2">
                        <img src="{{ asset('/storage/' . $umkm->id . '/' . $umkm->thumbnail) }}"
                            alt="{{ $umkm->name }}" class="w-24 h-24 object-cover rounded-lg mx-auto">
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold">Nama:</span>
                        {{ $umkm->name }}
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold">description:</span>
                        {{ $umkm->description }}
                    </div>
                    <div class="flex justify-center">
                        <a href="{{ route('umkms.show', $umkm) }}"
                            class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium py-1 px-2 rounded-lg mx-1">
                            Lihat
                        </a>
                        <a href="{{ route('umkms.edit', $umkm) }}"
                            class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-1 px-2 rounded-lg mx-1">
                            Edit
                        </a>
                        <form action="{{ route('umkms.destroy', $umkm) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-block bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-2 rounded-lg mx-1"
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
