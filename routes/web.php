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
use App\Http\Controllers\ProfileController;


use App\Http\Controllers\IndexuserController;
use App\Http\Controllers\DipinjamController;
use App\Http\Controllers\KonfirmasiuserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListbukuController;
use App\Http\Controllers\ProfileuserController;
use App\Models\dipinjam;
use App\Models\denda;

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

Route::get('/index',[IndexController::class, 'index'])->name('index')->middleware('auth');


// Route Login - Backend

// Route::get('/login', [LoginController::class, 'create'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route Sign Up - Backend

// Route::get('/signup', [RegisterController::class, 'create']);
// Route::post('/signup', [RegisterController::class, 'store']);

// Route Profile - Backend
Route::get('/profile',[ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::post('updateprofileadmin/{id}',[ProfileController::class, 'updateprofile'] )->name('profileadmin.update')->middleware('auth');


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


// Route Profile User - Frontend
Route::get('/profileuser',[ProfileuserController::class, 'index'])->name('profileuser')->middleware('auth');
Route::post('updateprofile/{id}', [ProfileuserController::class, 'updateprofile'])->name('profile.update')->middleware('auth');


Route::get('detail/{id}',[ListbukuController::class, 'detail'])->name('detailbuku');
Route::post('/pinjambuku/{id}',[BukuController::class, 'pinjambuku'])->name('pinjambuku');

Route::get('detailkategori/{id}',[ListbukuController::class, 'detailkategori'])->name('detailkategori');



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


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/loginadmin','loginadmin')->name('loginadmin');
        Route::view('/signupadmin','signupadmin')->name('signup');
        Route::post('/create',[SignupadminController::class, 'create'])->name('create');
        Route::post('/check',[AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        //Route::view('/index','index')->name('index');
        Route::get('/index', [IndexController::class, 'index'])->name('index');
        Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
    });
});



Route::get('/test',function(){
    $now = Carbon\Carbon::now();
            
            //$telat = denda::whereHas('pinjam',function(Builder $query){
            //     return $query->where('tenggat_pengembalian','<',$now);
            // })->get();
            $telat = dipinjam::where('tenggat_pengembalian','<',$now)->get();
            
            foreach($telat as $terlambat){
                print_r("ada");
                $haritelat = Carbon\Carbon::parse($terlambat->tenggat_pengembalian);
                $hari = $haritelat->diffinDays($now);
                $data = denda::where('id_pinjam', $terlambat->id)->first();
                if ($data){
                    $data->denda=$data->denda+3000;
                    $data->save();
                }else {
                    $data=new denda;
                    $data->id_pinjam=$terlambat->id;
                    $data->denda=3000;
                    $data->keterangan="Terlambat $hari hari";
                    $data->save();
                }
            }
});

Route::get('/sidebar', function () {
    return view('sidebar');
});