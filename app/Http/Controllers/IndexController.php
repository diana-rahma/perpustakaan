<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\kategori;
use App\Models\denda;
use App\Models\User;
use DB;


class IndexController extends Controller
{
    public function index()
    {
        $tersimpan = buku::count();
        // dd($tersimpan);
        $kategori = kategori::count();
        $siswatelat = denda::count();
        $siswa = User::count();

        return view('index',compact('tersimpan','kategori','siswatelat','siswa'));
    }
}
