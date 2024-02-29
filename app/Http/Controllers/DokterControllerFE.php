<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class DokterControllerFE extends Controller
{
    public function tenagaMedis() {
        return view('main.layouts.tenaga-medis', [
            'section' => 'informasi',
            'dokter' => Dokter::all() 
        ]);
    }

    public function jadwalDokter(Request $request) {
        $dokter = Dokter::latest();
        $spesialis = Spesialis::all();

        $searchDokter = $request->input('search-dokter');

        $searchSpesialis = $request->input('search-spesialis');
    
        if ($searchDokter) {
            $dokter->where('nama', 'like', '%' . $searchDokter . '%');
        }
    
        if ($searchSpesialis && $searchSpesialis != 'Pilih Salah Satu') {
            $dokter->where('spesialis_id', $searchSpesialis);
        }

        return view('main.layouts.jadwal-dokter', [
            'section' => 'informasi',
            'dokter' => $dokter->get(),
            'spesialis' => $spesialis
        ]);
    }
}
