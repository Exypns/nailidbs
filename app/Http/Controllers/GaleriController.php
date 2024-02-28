<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.backend.galeri', [
            'title' => 'Home Galeri',
            'galeri' => Galeri::all()
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
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'image'
        ]);
        $validateData['image'] = $request->file('image')->store('home-header-images');
        Galeri::create($validateData);

        return redirect('/naili-administrator/galeri')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('admin.backend.galeri.edit', [
            'title' => 'Edit Galeri',
            'galeri' => $galeri
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image'
        ];

        if ($request->title != $galeri->title) {
            $rules['title'] = 'required';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('galeri-images');
        }
        Galeri::where('id', $galeri->id)->update($validateData);
        return redirect('/naili-administrator/galeri')->with('success', 'Galeri berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        if($galeri->image) {
            Storage::delete($galeri->image);
        }
        Galeri::destroy($galeri->id);
        return redirect('/naili-administrator/galeri')->with('success', 'Galeri berhasil dihapus');
    }
}
