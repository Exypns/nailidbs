<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class AdminDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Dokter::latest();
        $dokter_spesialis_id = Dokter::all();
        $dokter_spesialis = Spesialis::all();

        if (request('search-dokter')) {
            // $dokter->where('nama', 'like', '%' . request('search-dokter') . '%');
                //    ->orWhere('spesialis_id', 'like', '%' . request('search-dokter') . '%');
            $dokter->where('spesialis_id', 'like', '%' . request('search-dokter') . '%');
        }

        return view('admin.backend.dokter', [
            "title" => "Dokter",
            "dokter" => $dokter->get(),
            "spesialis" => $dokter_spesialis,
            "dokter_spesialis_id" => $dokter_spesialis_id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
