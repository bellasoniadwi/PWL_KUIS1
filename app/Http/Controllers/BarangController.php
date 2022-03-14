<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::where('status','Ada')->get();

        return view('produk')
            ->with('title', ' - Produk')
            ->with('barangs', $barangs);
    }
}
