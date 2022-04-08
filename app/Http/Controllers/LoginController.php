<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function create() {

        return view('login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

}
