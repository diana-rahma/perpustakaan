<?php

namespace App\Http\Controllers;

use App\Models\profileuser;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileuserController extends Controller
{
    public function index() {
        return view('profileuser');
    }

    public function editprofile(User $user)
    {
        $data = $user::all();
        return view('edit_profile',compact('data', 'user'));
    }

    public function updateprofile(Request $request, $data)
    {
        $data->name = $request->name;
        $data->nisn = $request->nisn;
        $data->kelas = $request->kelas;
        $data->telephone = $request->telephone;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->password = $request->password;
        $data->save();

        // $user->update([
        //     'name'     => $request->name,
        //     'nisn'     => $request->nisn,
        //     'kelas'     => $request->kelas,
        //     'telephone'     => $request->telephone,
        //     'jk'     => $request->jk,
        //     'alamat'     => $request->alamat,
        //     'password'     => $request->password,
        // ]);
    return redirect()->route('index')->with('success',' Data Berhasil di Update');
    }

}
