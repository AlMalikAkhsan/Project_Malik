<?php

namespace App\Http\Controllers;
use App\Models\Eskul;
use App\Models\Fasilitas;
use App\Models\Informasi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class FrontController extends Controller
{    
    public function index()
    {
        return view('welcome');
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
}
