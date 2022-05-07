<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HistorydendaController;


use App\Http\Controllers\IndexuserController;
use App\Http\Controllers\DipinjamController;
use App\Http\Controllers\KonfirmasiuserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListbukuController;
use App\Http\Controllers\ProfileuserController;
// use App\Http\Controllers\ProfileuserController;

use App\Http\Controllers\SignupadminController;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/index', [IndexController::class, 'index']);

Route::get('/index', function () {
    return view('index');
});


// Route Login - Backend

// Route::get('/login', [LoginController::class, 'create'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/login', function () {
    return view('login');
});


// Route Sign Up - Backend

// Route::get('/signup', [RegisterController::class, 'create']);
// Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/signup', function () {
    return view('signup');
});


// Route Profile - Backend

Route::get('/profile', function () {
    return view('profile');
});



// Route Data Siswa - Backend

Route::get('/datasiswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/tambah_siswa',[SiswaController::class, 'createsiswa'])->name('tambah_siswa');
Route::post('/insertsiswa',[SiswaController::class, 'storesiswa'])->name('insertsiswa');

Route::get('/edit_siswa{siswa}',[SiswaController::class, 'editsiswa'])->name('edit.siswa');
Route::post('/updatekategori{siswa}',[SiswaController::class, 'updatesiswa'])->name('updatesiswa');

Route::delete('/delete/{siswa}',[SiswaController::class, 'deletesiswa'])->name('delete.siswa');


// Route List Kelas - Backend

Route::get('/listkelas', [KelasController::class, 'index'])->name('kelas.index');

Route::get('/tambah_kelas',[KelasController::class, 'createkelas'])->name('tambah_kelas');
Route::post('/insertkelas',[KelasController::class, 'storekelas'])->name('insertkelas');

Route::get('/edit_kelas{kelas}',[KelasController::class, 'editkelas'])->name('edit.kelas');
Route::post('/updatekelas{kelas}',[KelasController::class, 'updatekelas'])->name('updatekelas');

Route::delete('/delete{kelas}',[KelasController::class, 'deletekelas'])->name('delete.kelas');


// Route Data Peminjam - Backend

Route::get('/datapeminjam', [PeminjamController::class, 'index'])->name('peminjam.index');

Route::get('/tambah_peminjam',[PeminjamController::class, 'createpeminjam'])->name('tambah_peminjam');
Route::post('/insertpeminjam',[PeminjamController::class, 'storepeminjam'])->name('insertpeminjam');

Route::get('/edit_peminjam{peminjam}',[PeminjamController::class, 'editpeminjam'])->name('edit.peminjam');
Route::post('/updatepeminjam{peminjam}',[PeminjamController::class, 'updatepeminjam'])->name('updatepeminjam');

Route::get('/delete{id}',[PeminjamController::class, 'delete'])->name('delete');


// Route Data Buku - Backend

Route::get('databuku', [BukuController::class, 'index'])->name('databuku');

Route::get('/tambahbuku',[BukuController::class, 'tambahbuku'])->name('tambah_buku');
Route::post('/insertbuku',[BukuController::class, 'insertbuku'])->name('insertbuku');

Route::get('/editbuku{id}',[BukuController::class, 'editbuku'])->name('edit.buku');
Route::post('/updatebuku/{id}',[BukuController::class, 'updatebuku'])->name('updatebuku');

Route::get('/deletebuku/{id}',[BukuController::class, 'deletebuku'])->name('deletebuku');

// Route Konfirmasi - Backend

Route::get('/konfirmasi', [KonfirmasiController::class, 'index'])->name('konfirmasi.index');

Route::get('/tambah_konfirmasi',[KonfirmasiController::class, 'createkonfirmasi'])->name('tambah_konfirmasi');
Route::post('/insertkonfirmasi',[KonfirmasiController::class, 'storekonfirmasi'])->name('insertkonfirmasi');

Route::post('/setstatus/{id}',[KonfirmasiController::class, 'setstatus'])->name('setstatus');

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

Route::get('/indexuser', [IndexuserController::class, 'indexuser'])->middleware('auth');


// Route Login - Frontend

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route Sign Up - Frontend

Route::get('/signup', [RegisterController::class, 'create']);
Route::post('/signup', [RegisterController::class, 'store']);



// Route List Buku - Frontend

Route::get('/listbuku', [ListbukuController::class, 'index'])->name('listbuku')->middleware('auth');



// Route Dipinjam - Frontend

Route::get('/dipinjam', [DipinjamController::class, 'index'])->name('dipinjam.index')->middleware('auth');


// Route Konfirmasi - Frontend

Route::get('/konfirmasiuser', [KonfirmasiuserController::class, 'index'])->name('konfirmasiuser.index')->middleware('auth');


// Route History - Frontend

Route::get('/history', [HistoryController::class, 'index'])->name('history.index')->middleware('auth');


// Route Denda - Frontend

Route::get('/denda', [DendaController::class, 'index'])->name('denda.index')->middleware('auth');


// Route Profile - Frontend
Route::get('/profileuser',[ProfileuserController::class, 'index'])->name('profileuser')->middleware('auth');

Route::get('/edit_profile',[ProfileuserController::class, 'editprofile'])->name('editprofile');
Route::post('/updateprofile', [ProfileuserController::class, 'updateprofile'])->name('updateprofile')->middleware('auth');


Route::get('detail/{id}',[ListbukuController::class, 'detail'])->name('detailbuku');
Route::post('/pinjambuku/{id}',[BukuController::class, 'pinjambuku'])->name('pinjambuku');

Route::get('detailkategori/{id}',[ListbukuController::class, 'detailkategori'])->name('detailkategori');


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

// Route::get('/edit_profileuser', [ProfileuserController::class, 'editprofileuser'])->name('editprofileuser')->middleware('auth');
// Route::post('/updateprofileuser/{id}', [ProfileuserController::class, 'updateprofileuser'])->name('updateprofileuser')->middleware('auth');

Auth::routes();

//User

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/konfirmasiuser', [KonfirmasiuserController::class, 'index'])->name('konfirmasiuser.index')->middleware('auth');
Route::get('/dipinjam', [DipinjamController::class, 'index'])->name('dipinjam.index')->middleware('auth');
Route::get('/history', [HistoryController::class, 'index'])->name('history.index')->middleware('auth');
Route::get('/denda', [DendaController::class, 'index'])->name('denda.index')->middleware('auth');


// Route::prefix('admin')->name('admin.')->group(function(){

//     Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
//         Route::view('/loginadmin','loginadmin')->name('login');
//         Route::view('/signupadmin','signupadmin')->name('signup');
//         Route::post('/create',[SignupadminController::class, 'create'])->name('create');
//         Route::post('/check',[AdminController::class, 'check'])->name('check');
//     });

//     Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
//         Route::view('/index','index')->name('index');
//         Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
//     });
// });

Route::get('/index', [IndexController::class, 'index'])->name('index');