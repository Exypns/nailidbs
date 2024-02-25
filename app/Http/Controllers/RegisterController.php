<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('admin.register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {
        // return $request->all();
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registrasi Berhasil');

        return redirect('/naili-administrator/login')->with('success', 'Registrasi Berhasil');
    }
}
