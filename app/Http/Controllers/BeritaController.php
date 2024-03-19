<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $berita = Berita::latest();
        
        $searchBerita = $request->input('search-berita');

        if ($searchBerita) {
            $berita->where('judul', 'like', '%' . $searchBerita . '%');
        }

        return view('admin.backend.berita', [
            "title" => "Berita",
            "berita" => $berita->get()
        ]);
    }

    public function berita_single(Berita $berita) {
        return view('main.layouts.berita-show', [
            "title" => "Single Post",
            'section' => 'artikel',
            "berita" => $berita
        ]);
    }

    public function indexFE() {
        return view('main.layouts.berita', [
            'section' => 'artikel',
            'berita' => Berita::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'judul' => 'required|unique:beritas',
            'image' => 'image',
            'body' => 'required'
        ]);

        $validatedData['image'] = $request->file('image')->store('berita-images');
        Berita::create($validatedData);

        return redirect('/naili-administrator/berita')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('admin.backend.berita.edit', [
            'title' => 'Edit Berita',
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        // $validatedData = $request->validate([
        //     'judul' => 'required|unique:beritas',
        //     'body' => 'required'
        // ]);

        $rules = [
            'body' => 'required',
            'image' => 'image',
        ];

        if($request->judul != $berita->judul) {
            $rules['judul'] = 'required|unique:beritas';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }

        Berita::where('id', $berita->id)->update($validatedData);
        return redirect('/naili-administrator/berita')->with('success', 'Berita berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        if($berita->image) {
            Storage::delete($berita->image);
        }
        Berita::destroy($berita->id);
        return redirect('/naili-administrator/berita')->with('success', 'Berita berhasil dihapus');
    }
}
