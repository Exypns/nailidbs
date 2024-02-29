<?php

use App\Http\Controllers\AdminDokterController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\DokterControllerFE;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeControllerFE;
use App\Http\Controllers\HomeHeaderController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LoginControlller;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RegisterController;
use App\Models\Berita;
use App\Models\Dokter;
use App\Models\Fasilitas;
use App\Models\HomeHeader;
use App\Models\Spesialis;
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

Route::get('/', [HomeControllerFE::class, 'index']);

Route::get('/profil', function() {
    return view('main.layouts.profil', ['section' => 'profil']);
});

Route::get('/centre-of-excellence', function() {
    return view('main.layouts.centre-of-excellence', ['section' => 'centre-of-excellence']);
});

Route::get('/fasilitas', function() {
    return view('main.layouts.fasilitas', ['section' => 'fasilitas']);
});

Route::get('/kegiatan', [KegiatanController::class, 'indexFE']);

Route::get('/berita', [BeritaController::class, 'indexFE']);
Route::get('/berita/{berita:judul}', [BeritaController::class, 'berita_single']);

Route::get('/fasilitas', [FasilitasController::class, 'indexFE']);

Route::get('/fasilitas-pelayanan', function () {
    return view('main.layouts.fasilitas-pelayanan', ['section' => 'fasilitas']);
});

Route::get('/galeri', function() {
    return view('main.layouts.galeri', ['section' => 'galeri']);
});

Route::get('/tenaga-medis', [DokterControllerFE::class, 'tenagaMedis']);

Route::get('/jadwal-dokter', [DokterControllerFE::class, 'jadwalDokter']);

// ADMIN WEBPAGE

Route::get('/naili-administrator', function () {
    return view('admin.home', ['title' => 'Home']);
})->middleware('auth');

// LOGIN
Route::get('/naili-administrator/login', [LoginControlller::class, 'index'])->name('login')->middleware('guest');
Route::post('/naili-administrator/login', [LoginControlller::class, 'authenticate']);
Route::post('/logout', [LoginControlller::class, 'logout']);

// REGISTER
Route::get('/naili-administrator/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/naili-administrator/register', [RegisterController::class, 'store']);

// DOKTER
Route::get('/naili-administrator/dokter', [DokterController::class, 'index'])->middleware('auth');
Route::get('/naili-administrator/dokter/tambah-dokter', function() {
    return view('admin.backend.dokter.create', [ 'title' => 'Tambah Data Dokter', 'spesialis' => Spesialis::all()]);
})->middleware('auth');
Route::post('/tambah-dokter', [DokterController::class, 'store']);
Route::get('/naili-administrator/dokter/{dokter:id}/edit', [DokterController::class, 'edit']);
Route::delete('/naili-administrator/dokter/{dokter:id}', [DokterController::class, 'destroy']);
Route::get('/naili-administrator/dokter/{dokter:id}/edit', [DokterController::class, 'edit']);
Route::put('/edit-dokter/{dokter:id}', [DokterController::class, 'update']);

// BERITA
Route::get('/naili-administrator/berita', [BeritaController::class, 'index'])->middleware('auth');
Route::get('/naili-administrator/berita/tambah-berita', function() {
    return view('admin.backend.berita.create', [ 'title' => 'Tambah Berita']);
})->middleware('auth');
Route::post('/tambah-berita', [BeritaController::class, 'store']);
Route::delete('/naili-administrator/berita/{berita:id}', [BeritaController::class, 'destroy']);
Route::get('/naili-administrator/berita/{berita:id}/edit', [BeritaController::class, 'edit']);
Route::put('/edit-berita/{berita:id}', [BeritaController::class, 'update']);


// HOME HEADER
Route::get('/naili-administrator/home-header', [HomeHeaderController::class, 'index'])->middleware('auth');
Route::get('/naili-administrator/home-header/tambah-home-header', function() {
    return view('admin.backend.home-header.create', [ 'title' => 'Tambah Home Header']);
})->middleware('auth');
Route::post('/tambah-home-header', [HomeHeaderController::class, 'store']);
Route::delete('/naili-administrator/home-header/{home_header:id}', [HomeHeaderController::class, 'destroy']);
Route::get('/naili-administrator/home-header/{home_header:id}/edit', [HomeHeaderController::class, 'edit']);
Route::put('/edit-home-header/{home_header:id}', [HomeHeaderController::class, 'update']);

// FASILITAS
Route::get('/naili-administrator/fasilitas', [FasilitasController::class, 'index']);
Route::get('/naili-administrator/fasilitas/tambah-fasilitas', function() {
    return view('admin.backend.fasilitas.create', [ 'title' => 'Fasilitas']);
})->middleware('auth');
Route::post('/tambah-fasilitas', [FasilitasController::class, 'store']);
Route::delete('/naili-administrator/fasilitas/{fasilitas:id}', [FasilitasController::class, 'destroy']);
Route::get('/naili-administrator/fasilitas/{fasilitas:id}/edit', [FasilitasController::class, 'edit']);
Route::put('/edit-fasilitas/{fasilitas:id}', [FasilitasController::class, 'update']);

// KEGIATAN
Route::get('/naili-administrator/kegiatan', [KegiatanController::class, 'index'])->middleware('auth');
Route::get('/naili-administrator/kegiatan/tambah-kegiatan', function() {
    return view('admin.backend.kegiatan.create', [ 'title' => 'Tambah kegiatan']);
})->middleware('auth');
Route::post('/tambah-kegiatan', [KegiatanController::class, 'store']);
Route::delete('/naili-administrator/kegiatan/{kegiatan:id}', [KegiatanController::class, 'destroy']);
Route::get('/naili-administrator/kegiatan/{kegiatan:id}/edit', [KegiatanController::class, 'edit']);
Route::put('/edit-kegiatan/{kegiatan:id}', [KegiatanController::class, 'update']);
Route::get('/naili-administrator/kegiatan/{kegiatan:judul}',[KegiatanController::class, 'kegiatan_single']);

// PROMO
Route::get('/naili-administrator/promo', [PromoController::class, 'index'])->middleware('auth');
Route::get('/naili-administrator/promo/tambah-promo', function() {
    return view('admin.backend.promo.create', [ 'title' => 'Tambah Promo']);
})->middleware('auth');
Route::post('/tambah-promo', [PromoController::class, 'store']);
Route::delete('/naili-administrator/promo/{promo:id}', [PromoController::class, 'destroy']);
Route::get('/naili-administrator/promo/{promo:id}/edit', [PromoController::class, 'edit']);
Route::put('/edit-promo/{promo:id}', [PromoController::class, 'update']);

// GALERI
Route::get('/naili-administrator/galeri', [GaleriController::class, 'index'])->middleware('auth');
Route::get('/naili-administrator/galeri/tambah-galeri', function() {
    return view('admin.backend.galeri.create', [ 'title' => 'Tambah Galeri']);
})->middleware('auth');
Route::post('/tambah-galeri', [GaleriController::class, 'store']);
Route::delete('/naili-administrator/galeri/{galeri:id}', [GaleriController::class, 'destroy']);
Route::get('/naili-administrator/galeri/{galeri:id}/edit', [GaleriController::class, 'edit']);
Route::put('/edit-galeri/{galeri:id}', [GaleriController::class, 'update']);

Route::get('/edit-dokter/{id}', [DokterController::class, 'edit']);
Route::get('/edit-dokter', function() {
    return view('admin.backend.edit-dokter', [ 'title' => 'Edit Data Dokter']);
});


