<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function assets()
    {
        return view('dashboard.assets');
    }
    public function users()
    {
        return view('dashboard.users');
    }
}
