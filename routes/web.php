<?php

use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Models\wisata;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\TestimoniController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/h', function () {
    return view('welcome');
});

// Route::get('/home',[WisataController::class, "index"], function() {
//     return view('/home.home');
// });

Route::group(["prefix"=>"/home"], function(){
    Route::get('', [WisataController::class, "index"]);
    Route::get('/detail/{wisata:name}', [WisataController::class, 'show_location']);//detail
});

Route::group(["prefix"=>"/wisata"], function(){
    Route::get('/', [WisataController::class, 'index_wisata']);//view
    Route::get('/detail/{wisata:name}', [WisataController::class, 'show_wisata']);//detail
    Route::get('/create', [WisataController::class, 'create']);
    Route::post('/add', [WisataController::class, 'store']); // add data
    Route::delete('/delete/{wisata}', [WisataController::class, 'destroy']);
    Route::get('/edit/{wisata}', [WisataController::class, 'edit']);
    Route::post('/update/{wisata}', [WisataController::class, 'update']);
});

Route::group(["prefix"=>"/testimoni"], function(){
    Route::get('/', [TestimoniController::class, 'index']);
    Route::get('/edit/{testimoni}', [TestimoniController::class, 'edit']);
    Route::post('/update/{testimoni}', [TestimoniController::class, "update"]);
    Route::delete('/delete/{testimoni}', [TestimoniController::class, 'destroy']);
});