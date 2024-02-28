<?php

namespace App\Http\Controllers;

use App\Models\HomeHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.backend.home-header', [
            'title' => 'Home Header',
            'homeHeader' => HomeHeader::all()
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
        HomeHeader::create($validateData);

        return redirect('/naili-administrator/home-header')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeHeader $homeHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeHeader $homeHeader)
    {
        return view('admin.backend.home-header.edit', [
            'title' => 'Edit Home Header',
            'homeHeader' => $homeHeader
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeHeader $homeHeader)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image'
        ];

        if ($request->title != $homeHeader->title) {
            $rules['title'] = 'required';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('home-header-images');
        }
        HomeHeader::where('id', $homeHeader->id)->update($validateData);
        return redirect('/naili-administrator/home-header')->with('success', 'Home Header berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeHeader $homeHeader)
    {
        if($homeHeader->image) {
            Storage::delete($homeHeader->image);
        }
        HomeHeader::destroy($homeHeader->id);
        return redirect('/naili-administrator/home-header')->with('success', 'Home Header berhasil dihapus');
    }
}
