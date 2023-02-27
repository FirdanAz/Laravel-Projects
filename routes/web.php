<?php

use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Models\Wisata;
use App\Models\Login;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardCityController;
use App\Http\Controllers\Dashboard\DashboardTestimoniController;

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

Route::group(['prefix' => '/home'], function () {
    Route::get('', [WisataController::class, 'index']);
    Route::get('/detail/{wisata:name}', [
        WisataController::class,
        'show_location',
    ]); //detail
    Route::post('/add', [WisataController::class, 'store_testimoni']); // add data
});

Route::group(['prefix' => '/wisata'], function () {
    Route::get('/', [WisataController::class, 'index_wisata']); //view
    Route::get('/detail/{wisata:name}', [
        WisataController::class,
        'show_wisata',
    ]); //detail
    Route::get('/create', [WisataController::class, 'create']);
    Route::post('/add', [WisataController::class, 'store']); // add data
    Route::delete('/delete/{wisata}', [WisataController::class, 'destroy']);
    Route::get('/edit/{wisata}', [WisataController::class, 'edit']);
    Route::post('/update/{wisata}', [WisataController::class, 'update']);
});

Route::group(['prefix' => '/testimoni'], function () {
    Route::get('/', [TestimoniController::class, 'index']);
    Route::get('/edit/{testimoni}', [TestimoniController::class, 'edit']);
    Route::post('/update/{testimoni}', [TestimoniController::class, 'update']);
    Route::delete('/delete/{testimoni}', [
        TestimoniController::class,
        'destroy',
    ]);
});

Route::group(['prefix' => '/city'], function () {
    Route::get('/', [LocationController::class, 'index']);
    Route::get('/create', [LocationController::class, 'create']); // add data
    Route::post('/add', [LocationController::class, 'store']); // add data
});

Route::group(['prefix' => '/login'], function () {
    Route::get('/', [LoginController::class, 'index']);
    Route::get('/register', [LoginController::class, 'register']);
    Route::post('/auth', [LoginController::class, 'auth']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::group(['prefix' => '/register'], function () {
    Route::get('/', [RegisterController::class, 'index']);
    Route::post('/create', [RegisterController::class, 'create']);
});

Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/home', function () {
        return view('/dashboard.index');
    })->middleware('checkauth');

    Route::group(['prefix' => '/wisata'], function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard')
            ->middleware('checkauth'); //view
        Route::get('/detail/{wisata:name}', [
            DashboardController::class,
            'show_wisata',
        ])->middleware('auth'); //detail
        Route::get('/create', [
            DashboardController::class,
            'create',
        ])->middleware('auth');
        Route::post('/add', [DashboardController::class, 'store'])->middleware(
            'auth'
        ); // add data
        Route::delete('/delete/{wisata}', [
            DashboardController::class,
            'destroy',
        ])->middleware('auth');
        Route::get('/edit/{wisata}', [
            DashboardController::class,
            'edit',
        ])->middleware('auth');
        Route::post('/update/{wisata}', [
            DashboardController::class,
            'update',
        ])->middleware('auth');
    });

    Route::group(['prefix' => '/testimoni'], function () {
        Route::get('/', [
            DashboardTestimoniController::class,
            'index',
        ])
        ->name('dashboard')
        ->middleware('checkauth');
        Route::get('/edit/{testimoni}', [
            DashboardTestimoniController::class,
            'edit',
        ])->middleware('auth');
        Route::post('/update/{testimoni}', [
            DashboardTestimoniController::class,
            'update',
        ])->middleware('auth');
        Route::delete('/delete/{testimoni}', [
            DashboardTestimoniController::class,
            'destroy',
        ])->middleware('auth');
        Route::post('/add', [
            WisataController::class, 'store_testimoni'
        ])->middleware('auth');
    });

    Route::group(['prefix' => '/city'], function () {
        Route::get('/', [DashboardCityController::class, 'index_location'])
            ->name('dashboard')
            ->middleware('checkauth');
        Route::get('/create', [
            DashboardCityController::class,
            'create_location',
        ])->middleware('auth'); // add data
        Route::post('/add', [
            DashboardCityController::class,
            'store_location',
        ])->middleware('auth'); // add data
    });
});

