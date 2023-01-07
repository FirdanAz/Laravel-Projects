<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\User;

class LoginController extends Controller
{
    public static function index(){
        return view('login.login', [
            'users' => User::all()
        ]);
    }
    public static function register(){
        return view('register.register');
    }
}
