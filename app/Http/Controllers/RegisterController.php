<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        return redirect('/login')->with('success', 'Register Success');
    }
}
