<?php

use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Http\Controllers\LocationController;


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

Route::get('/home',[LocationController::class, "index"], function() {
    return view('/home.home');
});
Route::get('/wisata', function () {
    return view('wisata.wisata');
});
