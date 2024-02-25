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
    return view('main/layouts/home');
});

Route::get('/jadwal-dokter', function () {
    return view('main/layouts/jadwal-dokter');
});

Route::get('/fasilitas-pelayanan', function () {
    return view('main/layouts/fasilitas-pelayanan');
});

Route::get('/fasilitas', function () {
    return view('main/layouts/fasilitas');
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


