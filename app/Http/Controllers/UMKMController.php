<?php
// app/Http/Controllers/UMKMController.php

namespace App\Http\Controllers;

use App\Models\Product;
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
    public function show($umkm_id)
    {
        $umkm = UMKM::findOrFail($umkm_id);
        $products = Product::where('umkm_id', $umkm_id)->get();
        $data = [
            'umkm'=> $umkm,
            'products'=> $products
        ];
        return view('umkm.show', $data);
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $umkm = UMKM::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Handling image upload
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . $thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('storage/' . $umkm->id), $thumbnailName);
        $umkm->thumbnail = $thumbnailName;

        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . $thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('storage/' . $umkm->id), $thumbnailName);
        $umkm->thumbnail = $thumbnailName;
        $umkm->save();

        // $input = $request->all();

        // Upload thumbnail dan thumbnail ke direktori storage/public/umkms
        // $input['thumbnail'] = $request->file('thumbnail')->store('umkms', 'public');
        // $input['thumbnail'] = $request->file('thumbnail')->store('umkms', 'public');

        // UMKM::create($input);

        return redirect()->back();
    }

    public function edit(UMKM $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, UMKM $umkm)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $umkm = UMKM::findOrFail($request->id);
        $umkm->name = $request->name;
        $umkm->description = $request->description;

        // Handling image upload
        if($request->hasFile('thumbnail')) {
            Storage::delete('storage/' . $request->name . '/' . $umkm->thumbnail);
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('storage/' . $umkm->id), $thumbnailName);
            $umkm->thumbnail = $thumbnailName;
        }

        if($request->hasFile('thumbnail')) {
            Storage::delete('storage/' . $request->name . '/' . $umkm->thumbnail);
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('storage/' . $umkm->id), $thumbnailName);
            $umkm->thumbnail = $thumbnailName;
        }
        
        $umkm->save();

        // $input = $request->all();

        // // Jika ada thumbnail baru, upload dan hapus gambar lama
        // if ($request->hasFile('thumbnail')) {
        //     $input['thumbnail'] = $request->file('thumbnail')->store('umkms', 'public');
        // }

        // // Jika ada thumbnail baru, upload dan hapus gambar lama
        // if ($request->hasFile('thumbnail')) {
        //     $input['thumbnail'] = $request->file('thumbnail')->store('umkms', 'public');
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
