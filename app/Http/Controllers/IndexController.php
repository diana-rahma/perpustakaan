<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function index()
    {
        $tersimpan = DB::table('buku')->count();
        $kategori = DB::table('kategori')->count();
        $siswatelat = DB::table('denda')->count();
        $siswa = DB::table('users')->count();
        return view('index',compact('tersimpan','kategori','siswatelat','siswa'));
    }
}
