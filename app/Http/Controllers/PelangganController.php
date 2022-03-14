<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggans = Pelanggan::all();

        return view('klien')
            ->with('title', ' - Klien')
            ->with('pelanggans', $pelanggans);
    }
}
