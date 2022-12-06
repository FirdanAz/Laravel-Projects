<?php

use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Models\wisata;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\WisataController;


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

Route::get('/home',[WisataController::class, "index"], function() {
    return view('/home.home');
});

Route::group(["prefix"=>"/wisata"], function(){
    Route::get('/', [WisataController::class, 'index_wisata']);//view
    Route::get('/detail/{wisata:name}', [WisataController::class, 'show_wisata']);//detail
});