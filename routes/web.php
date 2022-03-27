<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Backend

Route::get('/index', function () {
    return view('index');
});

// Route Login

// Route::get('/login',[LoginController::class, 'login']);
// Route::post('/login',[LoginController::class, 'authenticate']);

// Route Profile - Backendspo

Route::get('/profile', function () {
    return view('profile');
});


// Route Data Siswa - Backend

Route::get('/datasiswa', function () {
    return view('datasiswa.datasiswa');
});
Route::get('/tambah_siswa', function () {
    return view('datasiswa.tambah_siswa');
});
Route::get('/edit_siswa', function () {
    return view('datasiswa.edit_siswa');
});


// Route List Kelas - Backend

Route::get('/listkelas', [KelasController::class, 'index'])->name('kelas.index');

Route::get('/tambah_kelas',[KelasController::class, 'create'])->name('tambah_kelas')  ;
Route::post('/insertkelas',[KelasController::class, 'store'])->name('insertkelas')  ;

Route::get('/edit_kelas/{id}',[KelasController::class, 'edit'])->name('edit_kelas')  ;
Route::post('/updatekelas/{id}',[KelasController::class, 'update'])->name('updatekelas')  ;

Route::get('/delete/{id}',[KelasController::class, 'delete'])->name('delete')  ;


// Route Data Peminjam - Backend

Route::get('/datapeminjam', function () {
    return view('datapeminjam.datapeminjam');
});
Route::get('/tambah_peminjam', function () {
    return view('datapeminjam.tambah_peminjam');
});
Route::get('/profildata', function () {
    return view('datapeminjam.profildata');
});
Route::get('/edit_peminjam', function () {
    return view('datapeminjam.edit_peminjam');
});


// Route Data Buku - Backend

Route::get('/databuku', function () {
    return view('databuku.databuku');
});
Route::get('/tambah_buku', function () {
    return view('databuku.tambah_buku');
});
Route::get('/edit_buku', function () {
    return view('databuku.edit_buku');
});


// Route Konfirmasi - Backend

Route::get('/konfirmasi', function () {
    return view('konfirmasi.konfirmasi');
});
Route::get('/tambah_konfirmasi', function () {
    return view('konfirmasi.tambah_konfirmasi');
});


// Route Kategori - Backend

Route::get('/listkategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/tambah_kategori',[KategoriController::class, 'create'])->name('tambah_kategori')  ;
Route::post('/insertkategori',[KategoriController::class, 'store'])->name('insertkategori')  ;

Route::get('/edit_kategori{kategori}',[KategoriController::class, 'edit'])->name('edit.kategori')  ;
Route::post('/updatekategori{kategori}',[KategoriController::class, 'update'])->name('updatekategori')  ;

Route::delete('/delete/{kategori}',[KategoriController::class, 'delete'])->name('delete.kategori')  ;


// Route History - Backend

Route::get('/historydenda', function () {
    return view('history.historydenda');
});
Route::get('/tambah_history', function () {
    return view('history.tambah_history');
});
Route::get('/edit_history', function () {
    return view('history.edit_history');
});





// Frontend

Route::get('/indexuser', function () {
    return view('frontend.index');
});


// Route List Buku - Frontend

Route::get('/listbuku', function () {
    return view('frontend.listbuku');
});


// Route Dipinjam - Frontend

Route::get('/dipinjam', function () {
    return view('frontend.dipinjam');
});


// Route Konfirmasi - Frontend

Route::get('/konfirmasiuser', function () {
    return view('frontend.konfirmasi');
});


// Route History - Frontend

Route::get('/history', function () {
    return view('frontend.history');
});


// Route Denda - Frontend

Route::get('/denda', function () {
    return view('frontend.denda');
});


// Route Profile - Frontend

Route::get('/profileuser', function () {
    return view('frontend.profile');
});


// Route Genre - Frontend

Route::get('/fantasy', function () {
    return view('frontend.fantasy');
});
Route::get('/romance', function () {
    return view('frontend.romance');
});
Route::get('/horror', function () {
    return view('frontend.horror');
});
Route::get('/adventure', function () {
    return view('frontend.adventure');
});
Route::get('/mistery', function () {
    return view('frontend.mistery');
});
Route::get('/biography', function () {
    return view('frontend.biography');
});
Route::get('/dictionary', function () {
    return view('frontend.dictionary');
});
Route::get('/humor', function () {
    return view('frontend.humor');
});
Route::get('/paket1', function () {
    return view('frontend.paket1');
});
Route::get('/paket2', function () {
    return view('frontend.paket2');
});
Route::get('/paket3', function () {
    return view('frontend.paket3');
});
Route::get('/pakettambahan', function () {
    return view('frontend.pakettambahan');
});
Route::get('/themagiclibrary', function () {
    return view('frontend.buku.fantasy.themagiclibrary');
});