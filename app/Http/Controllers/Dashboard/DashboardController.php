<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\Location;
use App\Models\Testimoni;

class DashboardController extends Controller
{

    public static function index(){
        return view('wisata.wisata', [
            'location'=>Location::all(),
            'wisatas'=>Wisata::filter(request(['search', 'location']))->Paginate(3),
        ]);
    }

    public function show_wisata(Wisata $wisata){
        return view('wisata.detail', [
            'wisatas'=> $wisata
        ]);
    }
    public static function index_wisata(){
        return view('wisata.wisata', [
            'wisatas'=>Wisata::all(),
        ]);
    }

    public function create(){
        return view('wisata.create', [
            'location' => Location::all()
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name'=>'required',
            'description'=>'required|max:255',
            'desc'=>'required',
            'rate'=>'required',
            'price'=>'required',
            'address'=>'required',
            'location_id'=>'required',
            'open_time'=>'required',
            'close_time'=>'required',
            'foto'      =>'mimes:jpg,jpeg,png'
        ]);

        $img_name = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        // $request->foto->move(public_path('img/image', $img_name));

        $filename = $request->foto->getClientOriginalName();
        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->storeAs('image/', $filename);
        }

        Wisata::create($validateData);
        return redirect('/dashboard/wisata/')->with('success', 'Book has been added !');
    }

    public function destroy(Wisata $wisata){
        Wisata::destroy($wisata->id);
        return redirect('/dashboard/wisata/')->with('success', 'Book has been deleted !');
    }

    public function edit(Wisata $wisata){
        return view('wisata.edit', [
            'location' => Location::all(),
            "wisata"   => $wisata
        ]);
    }
    public function update(Request $request, Wisata $wisata)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'desc'=>'required',
            'rate'=>'required',
            'price'=>'required',
            'address'=>'required',
            'location_id'=>'required',
            'open_time'=>'required',
            'close_time'=>'required',
            'foto'      =>'mimes:jpg,jpeg,png'
        ]);

        $filename = $request->foto->getClientOriginalName();
        // $request->foto->move(public_path('img/image', $filename));
        
        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->storeAs('image/',$filename);
        }

        Wisata::where('id', $wisata->id)
        ->update($validateData);
        return redirect('/dashboard/wisata/')->with('succes', 'Data has been updated !');
    }
}
