<?php

namespace App\Http\Controllers\Belakang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        $items = Pendaftaran::all();
        return view('pages.admin.pendaftaran.index', compact('items'));
    }

    public function pilih($universitas, $kelas)
    {
        $hasil = Pendaftaran::where('universitas', [$universitas])->where('kelas', [$kelas])->get();
        
        return view('pages.admin.pendaftaran.filter', compact('hasil'));
    }

    public function pilihKampus($universitas)
    {
        $hasil = Pendaftaran::where('universitas', [$universitas])->get();
        
        return view('pages.admin.pendaftaran.filter', compact('hasil'));
    }

    public function pilihKelas($kelas)
    {
        $hasil = Pendaftaran::where('kelas', [$kelas])->get();
        
        return view('pages.admin.pendaftaran.filter', compact('hasil'));
    }

    public function sukses()
    {
        return view('pages.depan.sukses');
    }
}
