<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
        //Validate inputs
        $request->validate([
            'email'=>'required|email|exist:admins,email',
            'password'=>'requiredmin:4|max:255'
        ],[
            'email.exists'=>'This email is not exist in admin table'
        ]);

        $creds = $request->only('email','password');

        if(Auth::guard('admin')->attempt($creds)){
            return redirect()->route('/index');
        }else{
            return redirect()->route('/loginadmin')->with('fail','Incorrect credentials');
        }

        function logoutadmin(){
            Auth::guard('admin')->logout();
            return redirect('/loginadmin');
        }
    }
}
