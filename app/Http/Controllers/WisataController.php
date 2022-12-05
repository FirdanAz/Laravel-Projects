<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class WisataController extends Controller
{
    public static function index(){
        return view('wisata.wisata', [
            'wisatas'=>Location::all()
        ]);
    }
}
