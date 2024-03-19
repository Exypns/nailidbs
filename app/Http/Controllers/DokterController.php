<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Jadwal;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
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

        return view('admin.backend.dokter', [
            "title" => "Dokter",
            "dokter" => $dokter->get(),
            "spesialis" => $spesialis,
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'image' => 'image',
        ]);

        $validatedData['spesialis_id'] = $request->spesialis_id;
        $validatedData['senin'] = $request->senin;
        $validatedData['selasa'] = $request->selasa;
        $validatedData['rabu'] = $request->rabu;
        $validatedData['kamis'] = $request->kamis;
        $validatedData['jumat'] = $request->jumat;
        $validatedData['sabtu'] = $request->sabtu;
        $validatedData['minggu'] = $request->minggu;

        $validatedData['image'] = $request->file('image')->store('dokter-images');

        Dokter::create($validatedData);
        return redirect('/naili-administrator/dokter')->with('success', 'Dokter berhasil ditambahkan');
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
    public function edit(Dokter $dokter)
    {
        return view('admin.backend.dokter.edit', [
            'title' => 'Edit Dokter',
            'dokter' => $dokter,
            'spesialis' => Spesialis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $rules = [
            'nama' => 'required',
            'image' => 'image',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['spesialis_id'] = $request->spesialis_id;
        $validatedData['senin'] = $request->senin;
        $validatedData['selasa'] = $request->selasa;
        $validatedData['rabu'] = $request->rabu;
        $validatedData['kamis'] = $request->kamis;
        $validatedData['jumat'] = $request->jumat;
        $validatedData['sabtu'] = $request->sabtu;
        $validatedData['minggu'] = $request->minggu;

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }

        Dokter::where('id', $dokter->id)->update($validatedData);
        return redirect('/naili-administrator/dokter')->with('success', 'Dokter berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
    */
    public function destroy(Dokter $dokter)
    {
        if($dokter->image) {
            Storage::delete($dokter->image);
        }
        Dokter::destroy($dokter->id);
        return redirect('/naili-administrator/dokter')->with('success', 'Dokter berhasil dihapus');
    }
}
