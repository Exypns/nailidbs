<?php

namespace App\Http\Controllers;

use App\Models\HomeHeader;
use App\Models\Kegiatan;
use App\Models\Promo;
use Illuminate\Http\Request;

class HomeControllerFE extends Controller
{
    public function index() 
    {
        return view('main.layouts.home', [
            'section' => 'home',
            'homeHeaders' => HomeHeader::latest()->take(2)->get(),
            'kegiatans' => Kegiatan::latest()->take(4)->get(),
            'promos' => Promo::latest()->take(3)->get()
        ]);
    }
}
