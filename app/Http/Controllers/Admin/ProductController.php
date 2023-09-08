<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UMKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($umkm_id)
    {
        $umkm = UMKM::findOrFail($umkm_id);
        return view('admin.umkm.produk.create', compact('umkm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock'=> 'required|numeric',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $product = Product::create([
            'name' => $request->name,
            'description'=> $request->description,
            'price'=> $request->price,
            'stock'=> $request->stock,
            'umkm_id' => $request->umkm_id,
        ]);

        // Thumbnail
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '.' . $thumbnail->extension();
        $thumbnail->move(public_path('storage/UMKM/' . $request->umkm_id . '/product'), $thumbnailName);
        $product->thumbnail = '/storage/UMKM/' . $request->umkm_id . '/product/' . $thumbnailName;
        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.umkm.produk.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
