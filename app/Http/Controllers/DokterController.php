<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class DokterController extends Controller
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

        // $title = 'Dokter';
        // return view('admin.backend.dokter', compact('dokter', 'title'));
        return view('admin.backend.dokter', [
            "title" => "Dokter",
            "dokter" => $dokter->get(),
            "spesialis" => $dokter_spesialis,
            "dokter_spesialis_id" => $dokter_spesialis_id
        ]);
        // return view('backend.dokter', ['nama' => 'asda', 'spesialis' => 'aasf']);
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
        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis
        ]); 
        return redirect('/dokter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter, $id)
    {
        $dokter = Dokter::find($id);
        return view('admiin.backend.edit-dokter', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter,$id)
    {
        //
        $dokter = Dokter::find($id);
        $dokter->update([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis
        ]);
        return redirect('/dokter');
    }

    /**
     * Remove the specified resource from storage.
    */
    public function destroy(Dokter $dokter)
    {
        //
    }
}
