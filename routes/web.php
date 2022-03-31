<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HistorydendaController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\BukuController;

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

Route::get('/datasiswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/tambah_siswa',[SiswaController::class, 'createsiswa'])->name('tambah_siswa')  ;
Route::post('/insertsiswa',[SiswaController::class, 'storesiswa'])->name('insertsiswa')  ;

Route::get('/edit_siswa{siswa}',[SiswaController::class, 'editsiswa'])->name('edit.siswa')  ;
Route::post('/updatekategori{siswa}',[SiswaController::class, 'updatesiswa'])->name('updatesiswa')  ;

Route::delete('/delete/{siswa}',[SiswaController::class, 'deletesiswa'])->name('delete.siswa')  ;


// Route List Kelas - Backend

Route::get('/listkelas', [KelasController::class, 'index'])->name('kelas.index');

Route::get('/tambah_kelas',[KelasController::class, 'createkelas'])->name('tambah_kelas')  ;
Route::post('/insertkelas',[KelasController::class, 'storekelas'])->name('insertkelas')  ;

Route::get('/edit_kelas{kelas}',[KelasController::class, 'editkelas'])->name('edit.kelas')  ;
Route::post('/updatekelas{kelas}',[KelasController::class, 'updatekelas'])->name('updatekelas')  ;

Route::delete('/delete{kelas}',[KelasController::class, 'deletekelas'])->name('delete.kelas')  ;


// Route Data Peminjam - Backend

Route::get('/datapeminjam', [PeminjamController::class, 'index'])->name('peminjam.index');

Route::get('/tambah_peminjam',[PeminjamController::class, 'createpeminjam'])->name('tambah_peminjam')  ;
Route::post('/insertpeminjam',[PeminjamController::class, 'storepeminjam'])->name('insertpeminjam')  ;

Route::get('/edit_peminjam{peminjam}',[PeminjamController::class, 'editpeminjam'])->name('edit.peminjam')  ;
Route::post('/updatepeminjam{peminjam}',[PeminjamController::class, 'updatepeminjam'])->name('updatepeminjam')  ;

Route::delete('/delete{peminjam}',[PeminjamController::class, 'deletepeminjam'])->name('delete.peminjam')  ;


// Route Data Buku - Backend

Route::get('/databuku', [BukuController::class, 'index'])->name('buku.index');

Route::get('/tambah_buku',[BukuController::class, 'createbuku'])->name('tambah_buku')  ;
Route::post('/insertbuku',[BukuController::class, 'storebuku'])->name('insertbuku')  ;

Route::get('/edit_buku{buku}',[BukuController::class, 'editbuku'])->name('edit.buku')  ;
Route::post('/updatekategori{buku}',[BukuController::class, 'updatebuku'])->name('updatebuku')  ;

Route::delete('/delete/{buku}',[BukuController::class, 'deletebuku'])->name('delete.buku')  ;

// Route Konfirmasi - Backend

Route::get('/konfirmasi', [KonfirmasiController::class, 'index'])->name('konfirmasi.index');

Route::get('/tambah_konfirmasi',[KonfirmasiController::class, 'createkonfirmasi'])->name('tambah_konfirmasi')  ;
Route::post('/insertkonfirmasi',[KonfirmasiController::class, 'storekonfirmasi'])->name('insertkonfirmasi')  ;


// Route Kategori - Backend

Route::get('/listkategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/tambah_kategori',[KategoriController::class, 'create'])->name('tambah_kategori')  ;
Route::post('/insertkategori',[KategoriController::class, 'store'])->name('insertkategori')  ;

Route::get('/edit_kategori{kategori}',[KategoriController::class, 'edit'])->name('edit.kategori')  ;
Route::post('/updatekategori{kategori}',[KategoriController::class, 'update'])->name('updatekategori')  ;

Route::delete('/delete/{kategori}',[KategoriController::class, 'delete'])->name('delete.kategori')  ;


// Route History - Backend

Route::get('/historydenda', [HistorydendaController::class, 'index'])->name('history.index');

Route::get('/tambah_history',[HistorydendaController::class, 'create'])->name('tambah_history')  ;
Route::post('/inserthistory',[HistorydendaController::class, 'store'])->name('inserthistory')  ;

Route::get('/edit_history{history}',[HistorydendaController::class, 'edit'])->name('edit.history')  ;
Route::post('/updatehistory{history}',[HistorydendaController::class, 'update'])->name('updatehistory')  ;

Route::delete('/delete/{history}',[HistorydendaController::class, 'delete'])->name('delete.history')  ;





// Frontend

Route::get('/indexuser', function () {
    return view('indexuser');
});


// Route List Buku - Frontend

Route::get('/listbuku', function () {
    return view('listbuku');
});


// Route Dipinjam - Frontend

Route::get('/dipinjam', function () {
    return view('dipinjam');
});


// Route Konfirmasi - Frontend

Route::get('/konfirmasiuser', function () {
    return view('konfirmasiuser');
});


// Route History - Frontend

Route::get('/history', function () {
    return view('history');
});


// Route Denda - Frontend

Route::get('/denda', function () {
    return view('denda');
});


// Route Profile - Frontend

Route::get('/profileuser', function () {
    return view('profileuser');
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