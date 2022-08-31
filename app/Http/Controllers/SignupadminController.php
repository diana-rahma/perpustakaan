<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class SignupadminController extends Controller
{

    function create(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'telepon' => 'required|min:10|max:13',
            'jk' => 'required|max:10',
            'alamat' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4|max:255'
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->telepon = $request->telepon;
        $admin->jk = $request->jk;
        $admin->alamat = $request->alamat;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save) {
            return redirect()->route('admin.loginadmin')->with('success','Registration successfull! Please login');
        }else {
            return redirect()->route('admin.signupadmin')->with('fail','Incorrect credentials');
        }
    }

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'telepon' => 'required|min:10|max:13',
    //         'jk' => 'required|max:10',
    //         'alamat' => 'required|max:255',
    //         'email' => 'required|email:dns|unique:users',
    //         'password' => 'required|min:4|max:255'
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(array $data)
    // {
    //     return Admin::create([
    //         'name' => $data['name'],
    //         'telepon' => $data['telepon'],
    //         'jk' => $data['jk'],
    //         'alamat' => $data['alamat'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

}