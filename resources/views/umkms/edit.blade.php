<!-- resources/views/umkms/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit UMKM</h1>
    <form action="{{ route('umkms.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $umkm->id }}">
        <div class="form-group">
            <label for="nama">Nama UMKM</label>
            <input type="text" name="nama_umkm" id="nama" class="form-control @error('nama') is-invalid @enderror"
                value="{{ old('nama', $umkm->nama_umkm) }}" required>
            @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi UMKM</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5"
                required>{{ old('deskripsi', $umkm->deskripsi) }}</textarea>
            @error('deskripsi')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar_umkm">Gambar UMKM</label>
            <input type="file" name="gambar_umkm" id="gambar_umkm"
                class="form-control @error('gambar_umkm') is-invalid @enderror">
            @error('gambar_umkm')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar_produk">Gambar Produk</label>
            <input type="file" name="gambar_produk" id="gambar_produk"
                class="form-control @error('gambar_produk') is-invalid @enderror">
            @error('gambar_produk')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
