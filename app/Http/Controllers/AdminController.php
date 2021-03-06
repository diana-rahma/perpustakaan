<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:admin,email',
           'password'=>'required|min:4|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        

        if( Auth::guard('admin')->attempt($creds) ){
            // dd($creds);
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }else{
            // dd('halo');
            return redirect()->route('admin.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('admin')->logout();
       return redirect('/loginadmin');
   }
}