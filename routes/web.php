<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;

use App\Http\Controllers\LoginControlller;
use App\Http\Controllers\RegisterController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// MAIN WEBPAGE

Route::get('/', function () {
    return view('main/layouts/home',['title'=> 'Home']) ;
});

Route::get('/jadwal-dokter', function () {
    return view('main/layouts/jadwal-dokter',['title'=> 'Profil']);
});

Route::get('/fasilitas-layanan', function () {
    return view('main/layouts/fasilitas-layanan',['title'=> 'fasilitas-layanan']);
});

Route::get('/fasilitas', function () {
    return view('main/layouts/fasilitas',['title'=> 'fasilitas']);
});

Route::get('/isi-berita', function () {
    return view('main/layouts/isi-berita',['title'=> 'isi-berita']);
});

Route::get('/galeri', function () {
    return view('main/layouts/galeri' ,['title'=> 'galeri']);
});

Route::get('/artikel-berita', function () {
    return view('main/layouts/artikel-berita' ,['title'=> 'artikel-berita']);
});

Route::get('/artikel-kegiatan', function () {
    return view('main/layouts/artikel-kegiatan',['title'=> 'artikel-kegiatan']);
});

Route::get('/centre-of-excellence', function () {
    return view('main/layouts/centre-of-excellence',['title'=> 'centre-of-excellence']);
});

// ADMIN WEBPAGE

Route::get('/naili-administrator', function () {
    return view('admin/app', ['title' => 'Home']);
});


// ADMIN WEBPAGE

Route::get('/naili-administrator', function () {
    return view('admin.app', ['title' => 'Home']);
});

Route::get('/naili-administrator/login', [LoginControlller::class, 'index']);
Route::post('/naili-administrator/login', [LoginControlller::class, 'authenticate']);

Route::get('/naili-administrator/register', [RegisterController::class, 'index']);
Route::post('/naili-administrator/register', [RegisterController::class, 'store']);

Route::get('/naili-administrator/dokter', [DokterController::class, 'index'])->name('dokter');
Route::post('tambahdokter', [DokterController::class, 'store']);

Route::get('/naili-administrator/berita', [BeritaController::class, 'index']);
Route::get('/naili-administrator/berita/{berita:judul}', [BeritaController::class, 'berita_single']);

Route::get('/tambah-dokter', function() {
    return view('admin.backend.tambah-dokter', [ 'title' => 'Tambah Data Dokter']);
});

Route::get('/edit-dokter/{id}', [DokterController::class, 'edit']);
Route::get('/edit-dokter', function() {
    return view('admin.backend.edit-dokter', [ 'title' => 'Edit Data Dokter']);
});


