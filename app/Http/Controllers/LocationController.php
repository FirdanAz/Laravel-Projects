<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public static function index(){
        return view('city.city', [
            'locations'=>Location::all()
        ]);
    }
}
