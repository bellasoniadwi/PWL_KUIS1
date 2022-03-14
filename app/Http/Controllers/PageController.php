<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda', ['title' => '- Beranda']);
    }
    public function produk()
    {
        return view('produk', ['title' => '- Produk']);
    }
    public function klien()
    {
        return view('klien', ['title' => '- Klien' ]);
    }
    public function tim()
    {
        return view('tim', ['title' => '- Tim' ]);
    }
    public function supplier()
    {
        return view('supplier', ['title' => '- Supplier']);
    }
    public function tentang()
    {
        return view('tentang', ['title' => '- Tentang Kami']);
    }
    public function hubungi()
    {
        return view('hubungi', ['title' => '- Hubungi Kami']);
    }
    
}

