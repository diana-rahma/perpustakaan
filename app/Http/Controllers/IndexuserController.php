<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\dipinjam;
use App\Models\denda;
use Illuminate\Database\Eloquent\Builder;

class IndexuserController extends Controller
{
    public function indexuser()
    {
        
        $dipinjam = dipinjam::where('status','Pending')->where('id_user', auth()->user()->id)->count();
        $telatkembali = denda::whereHas('pinjam', function(Builder $query){
        
        return $query->where('id_user', auth()->user()->id);

        })->count();

        $totaldenda = denda::whereHas('pinjam', function(Builder $query){
        
            return $query->where('id_user', auth()->user()->id);
    
            })->sum('denda');

        return view('indexuser',compact('dipinjam','telatkembali','totaldenda'));
    }
}
