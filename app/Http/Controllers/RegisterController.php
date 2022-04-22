<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function create() {

        return view('signup', [
            'title' => 'Signup',
            'active' => 'signup'
        ]);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nisn' => 'required|min:4|max:255',
            'kelas' => 'required|max:255',
            'telepon' => 'required|min:10|max:13',
            'jk' => 'required|max:10',
            'alamat' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4|max:255'
        ]);


        // Keamanan Password

        // $validatedData['password'] = bcrypt($validatedData['password']);
        
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        //$request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success','Registration successfull! Please login');
    }

    public function profileuser(){
        
        return view('profileuser');
    }




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

    public function updateprofileuser(Request $request, $id){
        dd($data);

        $data= User::find( Auth::user()->id );
        $data->update($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('/edit_profileuser')->with('success','Data Berhasil Di Update');
    }

}
