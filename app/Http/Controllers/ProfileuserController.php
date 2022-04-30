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

    public function edit_profile(User $user)
    {
        $data = $user::all();
        return view('edit_profile',compact('data', 'User'));
    }

    public function updateprofile(Request $request, User $user)
    {
        //
        $user->update([
            'name'     => $request->name,
            'nisn'     => $request->nisn,
            'kelas'     => $request->kelas,
            'telephone'     => $request->telephone,
            'jk'     => $request->jk,
            'alamat'     => $request->alamat,
            'password'     => $request->password,
        ]);
    return redirect()->route('index')->with('success',' Data Berhasil di Update');
    }

}
