<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\dipinjam;

class IndexuserController extends Controller
{
    public function indexuser()
    {
        $dipinjam = dipinjam::whereHas('user')->count();
        // $siswatelat = DB::table('denda')->count();
        // $siswa = DB::table('users')->count();
        return view('indexuser',compact('dipinjam'));
    }
}
