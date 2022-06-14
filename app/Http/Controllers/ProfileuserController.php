<?php

namespace App\Http\Controllers;

use App\Models\profileuser;
use App\Models\User;
use App\Models\kelas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Hash;

class ProfileuserController extends Controller
{
    public function index(User $user, Kelas $kelas) {
        $data = $user::all();
        $kelas = kelas::all();

        // $kelas = kelas::select('kelas')->distinct()->get();

        return view('profileuser',compact('data', 'user', 'kelas'));

    }


    public function updateprofile(Request $request, $data)
    {
        // dd($request->all());
        $data= User::find($data);
        $data->update($request->all());

        $data->name = $request->name;
        $data->nisn = $request->nisn;
        $data->id_kelas = $request->kelas;
        $data->telephone = $request->telephone;
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

    return redirect()->route('profileuser')->with('success',' Data Berhasil di Update');
    }

}
