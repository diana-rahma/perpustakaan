<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);


        // Keamanan Password

        // $validatedData['password'] = bcrypt($validatedData['password']);
        
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        //$request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success','Registration successfull! Please login');
    }
}
