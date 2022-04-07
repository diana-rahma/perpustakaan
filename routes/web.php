<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HistorydendaController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
// use App\Http\Controllers\LoginController;

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

// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'authenticate']);

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

Route::get('/delete{id}',[PeminjamController::class, 'delete'])->name('delete')  ;


// Route Data Buku - Backend

Route::get('databuku', [BukuController::class, 'index'])->name('databuku');

Route::get('/tambahbuku',[BukuController::class, 'tambahbuku'])->name('tambah_buku')  ;
Route::post('/insertbuku',[BukuController::class, 'insertbuku'])->name('insertbuku')  ;

Route::get('/editbuku{id}',[BukuController::class, 'editbuku'])->name('edit.buku')  ;
Route::post('/updatebuku/{id}',[BukuController::class, 'updatebuku'])->name('updatebuku')  ;

Route::get('/deletebuku/{id}',[BukuController::class, 'deletebuku'])->name('deletebuku')  ;

// Route Konfirmasi - Backend

Route::get('/konfirmasi', [KonfirmasiController::class, 'index'])->name('konfirmasi.index');

Route::get('/tambah_konfirmasi',[KonfirmasiController::class, 'createkonfirmasi'])->name('tambah_konfirmasi')  ;
Route::post('/insertkonfirmasi',[KonfirmasiController::class, 'storekonfirmasi'])->name('insertkonfirmasi')  ;


// Route Kategori - Backend

Route::get('listkategori',[KategoriController::class, 'index'])->name('listkategori');

Route::get('/tambah_kategori',[KategoriController::class, 'tambahkategori'])->name('tambahkategori');

Route::post('/insertkategori',[KategoriController::class, 'insertkategori'])->name('insertkategori');

Route::get('/edit_kategori{id}',[KategoriController::class, 'editkategori'])->name('editkategori');

Route::post('/updatekategori/{id}',[KategoriController::class, 'updatekategori'])->name('updatekategori');

Route::get('/delete/{id}',[KategoriController::class, 'delete'])->name('delete');


// Route History - Backend

Route::get('historydenda',[HistorydendaController::class, 'index'])->name('historydenda');

Route::get('/tambah_history',[HistorydendaController::class, 'tambahhistory'])->name('tambahhistory');

Route::post('/inserthistory',[HistorydendaController::class, 'inserthistory'])->name('inserthistory');

Route::get('/edit_history{id}',[HistorydendaController::class, 'edithistory'])->name('edithistory');

Route::post('/updatehistory/{id}',[HistorydendaController::class, 'updatehistory'])->name('updatehistory');

Route::get('/deletehistory/{id}',[HistorydendaController::class, 'delete'])->name('delete');





// Frontend

Route::get('/indexuser', function () {
    return view('indexuser');
});


// Route List Buku - Frontend

Route::get('/listbuku', function () {
    return view('listbuku.listbuku');
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


// Route Login - Frontend

Route::get('/login', function () {
    return view('login');
});


// Route Sign Up - Frontend

Route::get('/signup', function () {
    return view('signup');
});



// Route Genre - Fantasy

Route::get('/fantasy', function () {
    return view('listbuku.fantasy');
});

Route::get('/the-magic-library', function () {
    return view('buku.fantasy.the-magic-library');
});

Route::get('/the-lord-of-the-rings', function () {
    return view('buku.fantasy.the-lord-of-the-rings');
});


// Route Genre - Romance

Route::get('/romance', function () {
    return view('listbuku.romance');
});

Route::get('/the-book-of-almost', function () {
    return view('buku.romance.the-book-of-almost');
});


// Route Genre - Horror

Route::get('/horror', function () {
    return view('listbuku.horror');
});

Route::get('/those-eyes', function () {
    return view('buku.horror.those-eyes');
});

// Route Genre - Adventure

Route::get('/adventure', function () {
    return view('listbuku.adventure');
});

Route::get('/adventure-jack', function () {
    return view('buku.adventure.adventure-jack');
});


// Route Genre - Mistery

Route::get('/mistery', function () {
    return view('listbuku.mistery');
});

Route::get('/holy-mother', function () {
    return view('buku.mistery.holy-mother');
});


// Route Genre - Biography

Route::get('/biography', function () {
    return view('listbuku.biography');
});


// Route Genre - Dictionary

Route::get('/dictionary', function () {
    return view('listbuku.dictionary');
});


// Route Genre - Humor

Route::get('/humor', function () {
    return view('listbuku.humor');
});

Route::get('/setengah-jalan', function () {
    return view('buku.humor.setengah-jalan');
});

// Route Genre - Paket 1
Route::get('/paket1', function () {
    return view('listbuku.paket1');
});


// Route Genre - Paket 2

Route::get('/paket2', function () {
    return view('listbuku.paket2');
});


// Route Genre - Paket 3

Route::get('/paket3', function () {
    return view('listbuku.paket3');
});


// Route Genre - Paket Tambahan

Route::get('/pakettambahan', function () {
    return view('listbuku.pakettambahan');
});

