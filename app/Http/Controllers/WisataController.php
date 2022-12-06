<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public static function index(){
        return view('home.home', [
            'wisatas'=>Wisata::all(),
           
        ]);
    }

    public static function index_wisata(){
        return view('wisata.wisata', [
            'wisatas'=>Wisata::all(),
        ]);
    }

    public function show_wisata(Wisata $wisata){
        return view('wisata.detail', [
            'wisatas'=> $wisata
        ]);
    }
}
