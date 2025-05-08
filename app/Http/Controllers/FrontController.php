<?php

namespace App\Http\Controllers;
use App\Models\Eskul;
use App\Models\Informasi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function index()
    {        
        $informasi = Informasi::all();
        $eskul = Eskul::all();
        $karyawan = Karyawan::all();
        return view('welcome', compact('informasi','eskul','karyawan'));
    }    
}
