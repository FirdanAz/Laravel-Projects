<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public static function index(){
        return view('dashboard.index', [
            'dashboards'=>Dashboard::all()
        ]);
    }
}
