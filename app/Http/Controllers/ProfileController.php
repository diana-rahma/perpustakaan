<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function updateprofile(Request $request, $data)
    {
        // dd($data);
        $data= Admin::find($data);
        $data->name = $request->name;
        $data->telepon = $request->telepon;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        if(
            $request->password!=''
        ) {
            $data->password = Hash::make($request->password);
        }
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        
        $data->save();

    return redirect()->route('profile')->with('success',' Data Berhasil di Update');
    }

}

