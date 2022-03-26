<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login',[LoginController::class, 'login']);
Route::post('/login',[LoginController::class, 'authenticate']);

// Route Profile - Backendspo

Route::get('/profile', function () {
    return view('backend.profile');
});


// Route Data Siswa - Backend

Route::get('/datasiswa', function () {
    return view('backend.datasiswa');
});
Route::get('/tambah_siswa', function () {
    return view('backend.tambah_siswa');
});
Route::get('/edit_siswa', function () {
    return view('backend.edit_siswa');
});


// Route List Kelas - Backend

Route::get('/listkelas', function () {
    return view('backend.listkelas');
});
Route::get('/tambah_kelas', function () {
    return view('backend.tambah_kelas');
});
Route::get('/edit_kelas', function () {
    return view('backend.edit_kelas');
});


// Route Data Peminjam - Backend

Route::get('/datapeminjam', function () {
    return view('backend.datapeminjam');
});
Route::get('/tambah_peminjam', function () {
    return view('backend.tambah_peminjam');
});
Route::get('/profildata', function () {
    return view('backend.profildata');
});
Route::get('/edit_peminjam', function () {
    return view('backend.edit_peminjam');
});


// Route Data Buku - Backend

Route::get('/databuku', function () {
    return view('backend.databuku');
});
Route::get('/tambah_buku', function () {
    return view('backend.tambah_buku');
});
Route::get('/edit_buku', function () {
    return view('backend.edit_buku');
});


// Route Konfirmasi - Backend

Route::get('/konfirmasi', function () {
    return view('backend.konfirmasi');
});
Route::get('/tambah_konfirmasi', function () {
    return view('backend.tambah_konfirmasi');
});


// Route Kategori - Frontend

Route::get('/listkategori', [KategoriController::class, 'index']);

Route::get('/tambah_kategori',[KategoriController::class, 'tambah_kategori'])->name('tambah_kategori')  ;
Route::post('/insertkategori',[KategoriController::class, 'insertkategori'])->name('insertkategori')  ;

Route::get('/edit_kategori/{id}',[KategoriController::class, 'edit'])->name('edit_kategori')  ;
Route::post('/updatekategori/{id}',[KategoriController::class, 'update'])->name('updatekategori')  ;

Route::get('/delete/{id}',[KategoriController::class, 'delete'])->name('delete')  ;


// Route History - Backend

Route::get('/historydenda', function () {
    return view('backend.historydenda');
});
Route::get('/tambah_history', function () {
    return view('backend.tambah_history');
});
Route::get('/edit_history', function () {
    return view('backend.edit_history');
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