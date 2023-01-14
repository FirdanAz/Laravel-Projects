<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout() 
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/home');
    }
}
