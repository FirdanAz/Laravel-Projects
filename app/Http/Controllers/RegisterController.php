<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public static function index(){
        return view('register.register', [
            'users' => User::all()
        ]);
    }
    public function create(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return redirect('/home')->with('success', 'Register Success');
    }
}

