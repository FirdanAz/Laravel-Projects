<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public static function index(){
        return view('register.register', [
            'users' => User::all()
        ]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $data = User::create($request->all());

        return redirect('/home')->with('success', 'Register Success');
    }
}
