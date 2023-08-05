<!-- resources/views/umkms/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold mb-4 text-center">Detail UMKM</h1>
    <div class="bg-white rounded-lg shadow-md mb-4">
        <div class="p-4 text-center">
            <h5 class="text-lg font-semibold">Nama Umkm :{{ $umkm->nama_umkm }}</h5>
            <p class="mt-2 ">keterangan :{{ $umkm->deskripsi }}</p>
        </div>
        <img src="{{ asset('/storage/' . $umkm->id . '/' . $umkm->gambar_umkm) }}" alt="{{ $umkm->nama_umkm }}"
            class="w-full h-48 object-cover object-center rounded-t-lg">
    </div>
    <div class="justify-center items-center mt-3">

        <a href="{{ route('umkms.index') }}"
            class="inline-block px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Kembali</a>
    </div>
@endsection
