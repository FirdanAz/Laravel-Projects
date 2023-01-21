<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Owner;

class LocationController extends Controller
{
    public static function index(){
        return view('city.city', [
            'locations'=>Location::all()
        ]);
    }
    public function create(Location $location){
        return view('city.create', [
            'location' => Location::all()
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'city'      =>'required',
            'provinsi'  =>'required',
            'desc'      =>'required'
        ]);
        Location::create($validateData);
        return redirect('/city')->with('success', 'Book has been added !');
    }
}
