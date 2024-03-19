<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $promo = Promo::latest();

        $searchPromo = $request->input('search-promo');

        if ($searchPromo) {
            $promo->where('title', 'like', '%' . $searchPromo . '%');
        }

        return view('admin.backend.promo', [
            'title' => 'Promo',
            'promo' => $promo->get()
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
        $validateData['image'] = $request->file('image')->store('promo-images');
        Promo::create($validateData);

        return redirect('/naili-administrator/promo')->with('success', 'Promo berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('admin.backend.promo.edit', [
            'title' => 'Edit Promo',
            'promo' => $promo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image'
        ];

        if ($request->title != $promo->title) {
            $rules['title'] = 'required';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('promo-images');
        }
        Promo::where('id', $promo->id)->update($validateData);
        return redirect('/naili-administrator/promo')->with('success', 'Promo berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if($promo->image) {
            Storage::delete($promo->image);
        }
        Promo::destroy($promo->id);
        return redirect('/naili-administrator/promo')->with('success', 'Promo berhasil dihapus');
    }
}
