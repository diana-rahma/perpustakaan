<?php

namespace App\Http\Controllers;

use App\Models\profileuser;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileuserController extends Controller
{
    public function index(Request $request){

        // if($request->has('search')){
        //     $data = Kategori::where('kategori','LIKE','%' .$request->search. '%')->paginate(3);
        // }else{
        //     $data = Kategori::paginate(3);
        // }
        
        return view('profileuser',);
    }

    public function editprofileuser(Request $request){
        
        //$data= Profileuser::find();
        return view('/edit_profileuser', [
            'user' => $request->user()
        ]);
    }

    public function updateprofileuser(Request $request){
        $data= Profileuser::find();
        $data->update($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('/profileuser')->with('success','Data Berhasil Di Update');
    }

}
