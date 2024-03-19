<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kegiatan = Kegiatan::latest();

        $searchKegiatan = $request->input('search-kegiatan');

        if ($searchKegiatan) {
            $kegiatan->where('judul', 'like', '%' . $searchKegiatan . '%');
        }

        return view('admin.backend.kegiatan', [
            'title' => 'Kegiatan',
            'kegiatan' => $kegiatan->get()
        ]);
    }

    public function indexFE() {
        return view('main.layouts.kegiatan', [
            'section' => 'artikel',
            'kegiatan' => Kegiatan::latest()->get()
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
            'judul' => 'required|unique:kegiatans',
            'image' => 'image',
            'body' => 'required'
        ]);

        $validatedData['image'] = $request->file('image')->store('kegiatan-images');
        Kegiatan::create($validatedData);

        return redirect('/naili-administrator/kegiatan')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.backend.kegiatan.edit', [
            'title' => 'Edit Kegiatan',
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $rules = [
            'body' => 'required',
            'image' => 'image',
        ];

        if($request->judul != $kegiatan->judul) {
            $rules['judul'] = 'required|unique:kegiatans';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('kegiatan-images');
        }

        Kegiatan::where('id', $kegiatan->id)->update($validatedData);
        return redirect('/naili-administrator/kegiatan')->with('success', 'Kegiatan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if($kegiatan->image) {
            Storage::delete($kegiatan->image);
        }
        Kegiatan::destroy($kegiatan->id);
        return redirect('/naili-administrator/kegiatan')->with('success', 'Kegiatan berhasil dihapus');
    }
}
