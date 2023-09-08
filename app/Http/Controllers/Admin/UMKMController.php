<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UMKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkms = UMKM::all();
        return view('admin.umkm.index', compact('umkms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'whatsapps' => 'required|regex:/^(?:[0-9] ?){6,14}[0-9]$/',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $umkm = UMKM::create([
            'name' => $request->name,
            'description'=> $request->description,
            'whatsapps'=> $request->whatsapps,
        ]);

        // Thumbnail
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '.' . $thumbnail->extension();
        $thumbnail->move(public_path('storage/UMKM/' . $umkm->id . '/thumbnail'), $thumbnailName);
        $umkm->thumbnail = '/storage/UMKM/' . $umkm->id . '/thumbnail/' . $thumbnailName;
        $umkm->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($umkm)
    {
        $umkm = UMKM::findOrFail($umkm);
        return view('admin.umkm.show', compact('umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UMKM $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
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

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UMKM $umkm)
    {
        $umkm->delete();

        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil dihapus!');
    }
}
