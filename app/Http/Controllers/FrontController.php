<?php

namespace App\Http\Controllers;
use App\Models\Eskul;
use App\Models\Fasilitas;
use App\Models\Informasi;
use App\Models\Karyawan;
use App\Models\Prestasi;

use Illuminate\Http\Request;

class FrontController extends Controller
{    
    public function index()
    {
        $informasi = Informasi::take(3)->get();
        return view('welcome', compact('informasi'));
    }
    public function about()
    {
        $karyawan = Karyawan::all();
        return view('about', compact('karyawan'));
    }
    public function team()
    {
        $karyawan = Karyawan::all();
        return view('team', compact('karyawan'));
    }
     public function informasi()
    {
        $informasi = Informasi::all();
        return view('informasi', compact('informasi'));
    }
     public function detailinformasi($id)
    {
        $data = Informasi::findOrFail($id);
        return view('detail-informasi', compact('data'));
    }
    public function fasilitas()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas', compact('fasilitas'));
    }
    public function eskul()
    {
        $eskul = Eskul::all();
        return view('eskul', compact('eskul'));
    }
    public function prestasi()
    {
        $prestasi = Prestasi::all();
        return view('prestasi', compact('prestasi'));
    }
}
