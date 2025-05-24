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
        $prestasi = Prestasi::take(3)->get();
        $eskul = Eskul::take(3)->get();
        $karyawan = Karyawan::take(3)->get();
        return view('about', compact('karyawan','prestasi','eskul'));
    }
    public function team()
    {
        $karyawan = Karyawan::orderBy('id', 'desc')->get();
        return view('team', compact('karyawan'));
    }
     public function informasi()
    {
        $informasi = Informasi::orderBy('id', 'desc')->get();
        return view('informasi', compact('informasi'));
    }
     public function detailinformasi($id)
    {
        $data = Informasi::findOrFail($id);
        return view('detail-informasi', compact('data'));
    }   
    public function fasilitas()
    {
        $fasilitas = Fasilitas::orderBy('id', 'desc')->get();
        return view('fasilitas', compact('fasilitas'));
    }
    public function eskul()
    {
        $eskul = Eskul::orderBy('id', 'desc')->get();
        return view('eskul', compact('eskul'));
    }
    public function prestasi()
    {
        $prestasi = Prestasi::orderBy('id', 'desc')->get();
        return view('prestasi', compact('prestasi'));
    }
}
