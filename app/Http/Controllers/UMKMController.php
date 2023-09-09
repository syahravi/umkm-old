<?php

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
    //    
    }

    public function edit(UMKM $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, UMKM $umkm)
    {
        // 
    }

    public function destroy($umkm)
    {
        $umkm->delete();

        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil dihapus!');
    }
}
