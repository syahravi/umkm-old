<?php
// app/Http/Controllers/UMKMController.php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UMKMController extends Controller
{
    public function index()
    {
        $umkms = UMKM::all();
        return view('umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required',
            'deskripsi' => 'required',
            'gambar_umkm' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $umkm = UMKM::create([
            'nama_umkm' => $request->nama_umkm,
            'deskripsi' => $request->deskripsi,
        ]);

        // Handling image upload
        $gambar_umkm = $request->file('gambar_umkm');
        $gambar_umkmName = time() . $gambar_umkm->getClientOriginalName();
        $gambar_umkm->move(public_path('storage/' . $umkm->id), $gambar_umkmName);
        $umkm->gambar_umkm = $gambar_umkmName;

        $gambar_produk = $request->file('gambar_produk');
        $gambar_produkName = time() . $gambar_produk->getClientOriginalName();
        $gambar_produk->move(public_path('storage/' . $umkm->id), $gambar_produkName);
        $umkm->gambar_produk = $gambar_produkName;
        $umkm->save();

        // $input = $request->all();

        // Upload gambar_umkm dan gambar_produk ke direktori storage/public/umkms
        // $input['gambar_umkm'] = $request->file('gambar_umkm')->store('umkms', 'public');
        // $input['gambar_produk'] = $request->file('gambar_produk')->store('umkms', 'public');

        // UMKM::create($input);

        return redirect()->back();
    }

    public function show(UMKM $umkm)
    {
        return view('admin.umkm.show', compact('umkm'));
    }

    public function edit(UMKM $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, UMKM $umkm)
    {
        $request->validate([
            'gambar_umkm' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_produk' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $umkm = UMKM::findOrFail($request->id);
        $umkm->nama_umkm = $request->nama_umkm;
        $umkm->deskripsi = $request->deskripsi;

        // Handling image upload
        if($request->hasFile('gambar_umkm')) {
            Storage::delete('storage/' . $request->nama_umkm . '/' . $umkm->gambar_umkm);
            $gambar_umkm = $request->file('gambar_umkm');
            $gambar_umkmName = time() . $gambar_umkm->getClientOriginalName();
            $gambar_umkm->move(public_path('storage/' . $umkm->id), $gambar_umkmName);
            $umkm->gambar_umkm = $gambar_umkmName;
        }

        if($request->hasFile('gambar_produk')) {
            Storage::delete('storage/' . $request->nama_umkm . '/' . $umkm->gambar_umkm);
            $gambar_produk = $request->file('gambar_produk');
            $gambar_produkName = time() . $gambar_produk->getClientOriginalName();
            $gambar_produk->move(public_path('storage/' . $umkm->id), $gambar_produkName);
            $umkm->gambar_produk = $gambar_produkName;
        }
        
        $umkm->save();

        // $input = $request->all();

        // // Jika ada gambar_umkm baru, upload dan hapus gambar lama
        // if ($request->hasFile('gambar_umkm')) {
        //     $input['gambar_umkm'] = $request->file('gambar_umkm')->store('umkms', 'public');
        // }

        // // Jika ada gambar_produk baru, upload dan hapus gambar lama
        // if ($request->hasFile('gambar_produk')) {
        //     $input['gambar_produk'] = $request->file('gambar_produk')->store('umkms', 'public');
        // }

        // $umkm->update($input);

        return redirect()->back();
    }

    public function destroy(UMKM $umkm)
    {
        $umkm->delete();

        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil dihapus!');
    }
}
