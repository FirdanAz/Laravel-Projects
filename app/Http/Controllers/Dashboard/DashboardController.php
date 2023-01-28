<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Dashboard
{
    public static function index(){
        return view('dashboard.index', [
            'dashboards'=>Dashboard::all()
        ]);
    }
}
