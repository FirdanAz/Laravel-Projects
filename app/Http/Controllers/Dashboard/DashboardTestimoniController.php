<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Dashboard;
use App\Http\Controllers\Controller;

class DashboardTestimoniController extends Controller
{
    public static function index(){
        return view('testimoni.testimoni', [
            'testimonis'=>Testimoni::all(),
        ]);
    }

    public function edit(Testimoni $testimoni){
        return view('testimoni.edit', [
            'testimoni' => $testimoni
        ]);
    }
    public function update(Request $request, Testimoni $testimoni)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'address'=>'required',
            'message'=>'required'
        ]);
        Testimoni::where('id', $testimoni->id)
        ->update($validateData);
        return redirect('/testimoni')->with('succes', 'Data has been updated !');
    }
    public function destroy(Testimoni $testimoni){
        Testimoni::destroy($testimoni->id);
        return redirect('/testimoni')->with('success', 'Book has been deleted !');
    }

}
