<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Dashboard;
use App\Http\Controllers\Controller;

class DashboardCityController extends Controller
{
    public static function index_location(){
        return view('city.city', [
            'locations'=>Location::all()
        ]);
    }
    public function create_location(Location $location){
        return view('city.create', [
            'locations' => Location::all()
        ]);
    }
    public function store_location(Request $request)
    {
        $validateData = $request->validate([
            'city'      =>'required',
            'provinsi'  =>'required',
            'desc'      =>'required'
        ]);
        Location::create($validateData);
        return redirect('/dashboard/city')->with('success', 'Book has been added !');
    }
}
