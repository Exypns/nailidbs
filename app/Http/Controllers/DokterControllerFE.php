<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterControllerFE extends Controller
{
    public function tenagaMedis() {
        return view('main.layouts.tenaga-medis', [
            'section' => 'informasi',
            'dokter' => Dokter::all() 
        ]);
    }

    public function jadwalDokter() {
        return view('main.layouts.jadwal-dokter', [
            'section' => 'informasi',
            'dokter' => Dokter::all()
        ]);
    }
}
