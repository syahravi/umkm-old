<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class InfoUmkm extends Controller
{
    public function index()
    {
        $umkms = UMKM::all();
        return view('infoumkm', compact('umkms'));
    }
}
