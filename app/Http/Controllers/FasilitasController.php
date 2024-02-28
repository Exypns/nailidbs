<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.backend.fasilitas', [
            'title' => 'Fasilitas',
            'fasilitas' => Fasilitas::all()
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
            'nama_fasilitas' => 'required',
            'jumlah' => 'required',
            'image' => 'image'
        ]);

        $validatedData['image'] = $request->file('image')->store('fasilitas-iamges');
        Fasilitas::create($validatedData);

        return redirect('/naili-administrator/fasilitas')->with('success', 'Fasilitas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.backend.fasilitas.edit', [
            'title' => 'Edit Fasilitas',
            'fasilitas' => $fasilitas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required',
            'jumlah' => 'required'
        ]);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('fasilitas-images');
        }

        Fasilitas::where('id', $fasilitas->id)->update($validatedData);
        return redirect('/naili-administrator/fasilitas')->with('success', 'Fasilitas berhasil diedi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        if($fasilitas->image) {
            Storage::delete($fasilitas->image);
        }
        Fasilitas::destroy($fasilitas->id);
        return redirect('/naili-administrator/fasilitas')->with('success', 'Fasilitas berhasil dihapus');
    }
}
